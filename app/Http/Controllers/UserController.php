<?php

namespace sistemaCuriaDiocesana\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Hash;
use sistemaCuriaDiocesana\User;

use Validator;

class UserController extends Controller {
    
    public function index() {
        $parroquias = \sistemaCuriaDiocesana\Parroquia::all();
        $puesto = \sistemaCuriaDiocesana\Puesto::all();
        $rol = \sistemaCuriaDiocesana\Rol::where('IDRol', '=', Auth::user()->IDRol)->get();
        return view('auth.editarPerfil', ['parroquias' => $parroquias, 'puesto' => $puesto, 'rol' => $rol]);
    }
    
    public function index2() {
        $parroquias = \sistemaCuriaDiocesana\Parroquia::all();
        $puesto = \sistemaCuriaDiocesana\Puesto::all();
        $rol = \sistemaCuriaDiocesana\Rol::all();
        return view('AdminViews.AgregarUsuarioAdmin', ['parroquias' => $parroquias, 'puesto' => $puesto, 'rol' => $rol]);
    }
    
    public function home() {
        $usuarios = \sistemaCuriaDiocesana\User::where([['IDUser', '!=', Auth::user()->IDUser], ['IDUser', '!=', 1]])->get();
        
        return view('AdminViews.MantenimientoUsuario', ['usuarios'=> $usuarios]);
    }

    public function cambiarContrasena(Request $request) {
        
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];
        
        $messages = [
            'mypassword.required' => 'El campo es requerido',
            'password.required' => 'El campo es requerido',
            'password.confirmed' => 'Los passwords no coinciden',
            'password.min' => 'El mínimo permitido son 6 caracteres',
            'password.max' => 'El máximo permitido son 18 caracteres',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
            //return Redirect::to('/ActasAdmin');
            return back()->with('msjMalo', "Datos incorrectos");
        } else {
            if(Hash::check($request->mypassword, Auth::user()->Contrasenna)) {
                $user = new User;
                $user->where('Email', '=', Auth::user()->email)
                     ->update(['Contrasenna' => bcrypt($request->password)]);
                return back()->with('msjBueno', "Se ha cambiado correctamente la contraseña");
                //return Redirect::to('/ActasAdmin');
            } else {
                return back()->with('msjMalo', "Ha ocurrido un error al cambiar la contraseña");
                //return Redirect::to('/ActasAdmin');
            }
        }
    }
    
    public function editarPerfilUser(Request $request) {
        try {
            $user = new User;
            $user->where('IDUser', '=', Auth::user()->IDUser)
                 ->update(['Nombre' => $request->name, 'PrimerApellido' => $request->pApellido, 'SegundoApellido' => $request->sApellido, 'Email' => $request->email, 'IDParroquia' => $request->parroquia, 'NumCelular' => $request->numCel, 'IDPuesto' => $request->puesto, 'IDRol' => $request->rol]);
            return back()->with('msjBueno', "Se ha modificado correctamente la información");
            return Redirect::to('/ActasAdmin');
        } catch(\Exception $e) {
            return back()->with('msjMalo', "Ha ocurrido un error al editar la información");
            return Redirect::to('/ActasAdmin');
        }
    }
    
    
    public function EliminarUsuario($id) {
        try {
            User::destroy($id);
            return back()->with('msjBueno', "Se ha eliminado el usuario correctamente");
            return Redirect::to('/mantenimientoUsuarios');
        } catch(\Exception $e) {
            return back()->with('msjMalo', "Ha ocurrido un error al eliminar el usuario");
            return Redirect::to('/mantenimientoUsuarios');
        }
    } // fin EliminarUsuario
    
    public function editarUsuarioAdmin(Request $request) {
        try {
            $id = $_POST['IDUser'];
            
            $user = User::find($id);
            $user->Nombre = $request->name;
            $user->PrimerApellido = $request->pApellido;
            $user->SegundoApellido = $request->sApellido;
            $user->Email = $request->email;
            $user->IDParroquia = $request->parroquia;
            $user->NumCelular = $request->numCel;
            $user->IDPuesto = $request->puesto;
            $user->IDRol = $request->rol;
            $user -> save();
            
            return back()->with('msjBueno', "Se ha modificado correctamente la información");
            return Redirect::to('/ActasAdmin');
        } catch(\Exception $e) {
            return back()->with('msjMalo', "Ha ocurrido un error al editar la información");
            return Redirect::to('/ActasAdmin');
        }
    }
    
    public function mostrarUsuario($id) {
        $usuario = User::where('IDUser', $id) -> first();
        $parroquias = \sistemaCuriaDiocesana\Parroquia::all();
        $puesto = \sistemaCuriaDiocesana\Puesto::all();
        $rol = \sistemaCuriaDiocesana\Rol::all();
        return view('AdminViews.EditarUsuariosAdmin', ['usuario'=> $usuario, 'parroquias' => $parroquias, 'puesto' => $puesto, 'rol' => $rol]);
    }
    
    public function agregarUsuario(Request $request) {
        try {
            $email = \sistemaCuriaDiocesana\User::where('email', $request->email)->first();
                   
            if ($email != null) {
                $request->session()->flash('errorEmail', '¡El email ya se encuentra registrado! Revise sus datos e intente nuevamente');
                
                $parroquias = \sistemaCuriaDiocesana\Parroquia::all();
                $puesto = \sistemaCuriaDiocesana\Puesto::all();
                $rol = \sistemaCuriaDiocesana\Rol::all();
                return view('AdminViews.AgregarUsuarioAdmin', ['parroquias' => $parroquias, 'puesto' => $puesto, 'rol' => $rol]);
            }       
            
            $user = new User;
            
            $user->Nombre = $request->name;
            $user->PrimerApellido = $request->pApellido;
            $user->SegundoApellido = $request->sApellido;
            $user->Email = $request->email;
            $user->Contrasenna = Hash::make($request->password);
            $user->IDParroquia = $request->parroquia;
            $user->IDRol = $request->rol;
            $user->IDPuesto = $request->puesto;
            $user->Activo = 1;
            
            if ($request->has('numCel')) {
                $user->NumCelular = $request->numCel;
            }
            
            $user->save();
        
            return back()->with('msjBueno', "Se ha creado correctamente el usuario");
            return Redirect::to('/ActasAdmin');
        } catch(\Exception $e) {
            return back()->with('msjMalo', "Ha ocurrido un error al ingresar el usuario");
            return Redirect::to('/ActasAdmin');
        }
    }
    
}