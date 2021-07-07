<?php

namespace sistemaCuriaDiocesana\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Validator;

use sistemaCuriaDiocesana\Persona;
use sistemaCuriaDiocesana\Laico;
use sistemaCuriaDiocesana\UbicacionActa;
use sistemaCuriaDiocesana\Acta;
use sistemaCuriaDiocesana\ActaBautizo;
use sistemaCuriaDiocesana\ActaConfirma;
use sistemaCuriaDiocesana\ActaMatrimonio;
use sistemaCuriaDiocesana\ActaDefuncion;
use sistemaCuriaDiocesana\Parroquia;


class ActaAdminController extends Controller
{
    public function index() {
        $personas = \sistemaCuriaDiocesana\Persona::All();
        return view('AdminViews.ConsultaActaAdmin', compact('personas'));
    }
    
    public function EditarActa($id) {
        try {
            $acta = Acta::where('IDPersona', $id) -> first();
            $parroquias = \sistemaCuriaDiocesana\Parroquia::all();
            
            $idBautismo = $acta -> IDBautismo;
            $idConfirma = $acta -> IDConfirma;
            $idMatrimonio = $acta -> IDMatrimonio;
            $idDefuncion = $acta -> IDDefuncion;
            
            $actaBautismo = ActaBautizo::where('IDBautismo', $idBautismo) -> first();
            $actaConfirma = ActaConfirma::where('IDConfirma', $idConfirma) -> first();
            $actaMatrimonio = ActaMatrimonio::where('IDMatrimonio', $idMatrimonio) -> first();
            $actaDefuncion = ActaDefuncion::where('IDDefuncion', $idDefuncion) -> first();
            
            if($idBautismo != null) {
                $idUbicacionActaBau = $actaBautismo ->IDUbicacionActaBau;
                $UbicacionActaBautismo = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaBau) -> first();
            } else {
                $idUbicacionActaBau = null;
                $UbicacionActaBautismo = null;
            }
            
            if($idConfirma != null) {
                $idUbicacionActaCon = $actaConfirma ->IDUbicacionActaCon;
                $UbicacionActaConfirma = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaCon) -> first();
            } else {
                $idUbicacionActaCon = null;
                $UbicacionActaConfirma = null;
            }
            
            if($idMatrimonio != null) {
                $idUbicacionActaMat = $actaMatrimonio ->IDUbicacionActaMat;
                $UbicacionActaMatrimonio = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaMat) -> first();
            }
            else {
                $idUbicacionActaMat = null;
                $UbicacionActaMatrimonio = null;
            }
           
            if($idDefuncion != null) {
                $idUbicacionActaDef = $actaDefuncion ->IDUbicacionActaDef;
                $UbicacionActaDefuncion = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaDef) -> first();
            } else {
                $idUbicacionActaDef = null;
                $UbicacionActaDefuncion = null;
            }
            
            return view('AdminViews.EditarActaAdmin', ['persona' => Persona::findOrFail($id), 'laico' => Laico::findOrFail($id), 
            'acta' => $acta, 'actaBautismo' => $actaBautismo, 'actaConfirma' => $actaConfirma, 'actaMatrimonio' => $actaMatrimonio, 
            'actaDefuncion' => $actaDefuncion, 'UbicacionActaBautismo' => $UbicacionActaBautismo, 'UbicacionActaConfirma' => $UbicacionActaConfirma,
            'UbicacionActaMatrimonio' => $UbicacionActaMatrimonio, 'UbicacionActaDefuncion' => $UbicacionActaDefuncion, 'parroquias'=> $parroquias ]);
        
        } catch(\Exception $e) {
            return back()->with('msjMalo', "Ha ocurrido un error");
            return Redirect::to('/consultaAdmin');
        }
    } // fin EditarActa
    
    
    // --------------
    public function DetalleActa($id) {
        try {
            $acta = Acta::where('IDPersona', $id) -> first();
            $parroquias = \sistemaCuriaDiocesana\Parroquia::all();
            
            $idBautismo = $acta -> IDBautismo;
            $idConfirma = $acta -> IDConfirma;
            $idMatrimonio = $acta -> IDMatrimonio;
            $idDefuncion = $acta -> IDDefuncion;
            $idParroquia = $acta ->IDParroquia;
            
            $actaBautismo = ActaBautizo::where('IDBautismo', $idBautismo) -> first();
            $actaConfirma = ActaConfirma::where('IDConfirma', $idConfirma) -> first();
            $actaMatrimonio = ActaMatrimonio::where('IDMatrimonio', $idMatrimonio) -> first();
            $actaDefuncion = ActaDefuncion::where('IDDefuncion', $idDefuncion) -> first();
            $parroquia = Parroquia::where('IDParroquia', $idParroquia) -> first();
            $laico = Laico::findOrFail($id);
            
            if($laico->IDTipo_Hijo == 1) {
                $tipoHijo = "Natural";
            } else {
                $tipoHijo = "Legítimo";
            }

            if($idBautismo != null) {
                $idUbicacionActaBau = $actaBautismo ->IDUbicacionActaBau;
                $UbicacionActaBautismo = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaBau) -> first();
            } else {
                $idUbicacionActaBau = null;
                $UbicacionActaBautismo = null;
            }
            
            if($idConfirma != null) {
                $idUbicacionActaCon = $actaConfirma ->IDUbicacionActaCon;
                $UbicacionActaConfirma = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaCon) -> first();
            } else {
                $idUbicacionActaCon = null;
                $UbicacionActaConfirma = null;
            }
            
            if($idMatrimonio != null) {
                $idUbicacionActaMat = $actaMatrimonio ->IDUbicacionActaMat;
                $UbicacionActaMatrimonio = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaMat) -> first();
            }
            else {
                $idUbicacionActaMat = null;
                $UbicacionActaMatrimonio = null;
            }
           
            if($idDefuncion != null) {
                $idUbicacionActaDef = $actaDefuncion ->IDUbicacionActaDef;
                $UbicacionActaDefuncion = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaDef) -> first();
            } else {
                $idUbicacionActaDef = null;
                $UbicacionActaDefuncion = null;
            }
            
            return view('AdminViews.DetalleActaAdmin', ['persona' => Persona::findOrFail($id), 'laico' => $laico, 
            'acta' => $acta, 'actaBautismo' => $actaBautismo, 'actaConfirma' => $actaConfirma, 'actaMatrimonio' => $actaMatrimonio, 
            'actaDefuncion' => $actaDefuncion, 'UbicacionActaBautismo' => $UbicacionActaBautismo, 'UbicacionActaConfirma' => $UbicacionActaConfirma,
            'UbicacionActaMatrimonio' => $UbicacionActaMatrimonio, 'UbicacionActaDefuncion' => $UbicacionActaDefuncion,'parroquia'=> $parroquia, 'tipoHijo' => $tipoHijo ]);
        
        } catch(Exception $e) {
            return back()->with('msjMalo', "Ha ocurrido un error " + $e);
            return Redirect::to('/consultaAdmin');
        }
    } // fin DetalleActa
    

    public function actualizarActa(Request $request) {
        try {
            $id = $_POST['IDPersona'];
            
            $persona = Persona::find($id);
            $persona->Cedula = $request->numCedulaEdit;
            $persona->Nombre = $request->nombreEdit;
            $persona->PrimerApellido = $request->apellido1Edit;
            $persona->SegundoApellido = $request->apellido2Edit;
            $persona -> save();
            
            $laico = Laico::find($id);
            $laico->IDTipo_Hijo = $request->tipoHijo;
            $laico->NombreMadre = $request->nombreMadreEdit;
            $laico->NombrePadre = $request->nombrePadreEdit;
            $laico->LugarNacimiento = $request->lugarNacEdit;
            $laico->FechaNacimiento = $request->fechaNacEdit;
            $laico -> save();
            
            $acta =  Acta::where('IDPersona', $id) -> first();
            $acta -> NotasMarginales = $request->notasMarginalesEdit;
            $acta->IDParroquia = $request->parroquia;
            $idBautismo = $acta -> IDBautismo;
            $idConfirma = $acta -> IDConfirma;
            $idMatrimonio = $acta -> IDMatrimonio;
            $idDefuncion = $acta -> IDDefuncion;
            
            if($idBautismo != null) {
                $actaBautismo = ActaBautizo::where('IDBautismo', $idBautismo) -> first();
                $actaBautismo -> LugarBautismo = $request->lugarBautizo;
                $actaBautismo->FechaBautismo = $request->fechaBautizo;
                $actaBautismo->PadrinoBau1 = $request->nombreMadrinaB;
                $actaBautismo-> PadrinoBau2 = $request->nombrePadrinoB;
                $actaBautismo -> save();
                
                $idUbicacionActaBau = $actaBautismo ->IDUbicacionActaBau;
                $UbicacionActaBautismo = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaBau) -> first();
                $UbicacionActaBautismo->Libro = $request->numLibroB;
                $UbicacionActaBautismo->Folio = $request->numFolioB;
                $UbicacionActaBautismo->Asiento = $request->numAsientoB;
                $UbicacionActaBautismo->save();
            } else {
                if ($request->has('lugarBautizo')) {
                    $UbicacionActaBautismo = new UbicacionActa;
                    $UbicacionActaBautismo->Libro = $request->numLibroB;
                    $UbicacionActaBautismo->Folio = $request->numFolioB;
                    $UbicacionActaBautismo->Asiento = $request->numAsientoB;
                    $UbicacionActaBautismo->save();
                    
                    $actaBautismo = new ActaBautizo;
                    $actaBautismo -> LugarBautismo = $request->lugarBautizo;
                    $actaBautismo->FechaBautismo = $request->fechaBautizo;
                    $actaBautismo->PadrinoBau1 = $request->nombreMadrinaB;
                    $actaBautismo-> PadrinoBau2 = $request->nombrePadrinoB;
                    $actaBautismo ->IDUbicacionActaBau = $UbicacionActaBautismo -> IDUbicacionActa;
                    $actaBautismo -> save();
                
                    $acta -> IDBautismo = $actaBautismo -> IDBautismo;
                }
            }
     
            if($idConfirma != null) {
                $actaConfirma = ActaConfirma::where('IDConfirma', $idConfirma) -> first();
                $actaConfirma->LugarConfirma = $request->lugarConfirma;
                $actaConfirma->FechaConfirma = $request->fechaConfirma;
                $actaConfirma->PadrinoCon1 = $request-> nombrePadrinoC1;
                $actaConfirma->PadrinoCon2 = $request->nombrePadrinoC2;
                $actaConfirma-> save();
                
                $idUbicacionActaCon = $actaConfirma ->IDUbicacionActaCon;
                $UbicacionActaConfirma = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaCon) -> first();
                $UbicacionActaConfirma->Libro = $request->numLibroC;
                $UbicacionActaConfirma->Folio = $request->numFolioC;
                $UbicacionActaConfirma->Asiento = $request->numAsientoC;
                $UbicacionActaConfirma->save();
            } else {
                if ($request->has('lugarConfirma')) {
                    $UbicacionActaConfirma = new UbicacionActa;
                    $UbicacionActaConfirma->Libro = $request->numLibroC;
                    $UbicacionActaConfirma->Folio = $request->numFolioC;
                    $UbicacionActaConfirma->Asiento = $request->numAsientoC;
                    $UbicacionActaConfirma->save();
                    
                    $actaConfirma = new ActaConfirma;
                    $actaConfirma->LugarConfirma = $request->lugarConfirma;
                    $actaConfirma->FechaConfirma = $request->fechaConfirma;
                    $actaConfirma->PadrinoCon1 = $request-> nombrePadrinoC1;
                    $actaConfirma->PadrinoCon2 = $request->nombrePadrinoC2;
                    $actaConfirma->IDUbicacionActaCon = $UbicacionActaConfirma->IDUbicacionActa;
                    $actaConfirma-> save();
                    
                    $acta -> IDConfirma =  $actaConfirma ->IDConfirma;
                }
            }
    
            if($idMatrimonio != null) {
                $actaMatrimonio = ActaMatrimonio::where('IDMatrimonio', $idMatrimonio) -> first();
                $actaMatrimonio->LugarMatrimonio = $request->lugarMatrimonio;
                $actaMatrimonio->FechaMatrimonio = $request->fechaMatrimonio;
                $actaMatrimonio->NombreConyugue = $request-> nombreConyuge;
                $actaMatrimonio-> save();
                
                $idUbicacionActaMat = $actaMatrimonio ->IDUbicacionActaMat;
                $UbicacionActaMatrimonio = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaMat) -> first();
                $UbicacionActaMatrimonio->Libro = $request->numLibroM;
                $UbicacionActaMatrimonio->Folio = $request->numFolioM;
                $UbicacionActaMatrimonio->Asiento = $request->numAsientoM;
                $UbicacionActaMatrimonio->save();
            } else {
                 if ($request->has('lugarMatrimonio')) {
                    $UbicacionActaMatrimonio = new UbicacionActa;
                    $UbicacionActaMatrimonio->Libro = $request->numLibroM;
                    $UbicacionActaMatrimonio->Folio = $request->numFolioM;
                    $UbicacionActaMatrimonio->Asiento = $request->numAsientoM;
                    $UbicacionActaMatrimonio->save();
                    
                    $actaMatrimonio = new ActaMatrimonio;
                    $actaMatrimonio->LugarMatrimonio = $request->lugarMatrimonio;
                    $actaMatrimonio->FechaMatrimonio = $request->fechaMatrimonio;
                    $actaMatrimonio->NombreConyugue = $request-> nombreConyuge;
                    $actaMatrimonio->IDUbicacionActaMat = $UbicacionActaMatrimonio->IDUbicacionActa;
                    $actaMatrimonio-> save();
                    
                    $acta->IDMatrimonio = $actaMatrimonio->IDMatrimonio;
                 }
            }
    
            if($idDefuncion != null) {
                $actaDefuncion = ActaDefuncion::where('IDDefuncion', $idDefuncion) -> first();
                $actaDefuncion->LugarDefuncion = $request->lugarDefuncion;
                $actaDefuncion->FechaDefuncion = $request->fechaDefuncion;
                $actaDefuncion->CausaMuerte = $request-> causaDefuncion;
                $actaDefuncion-> save();
                
                $idUbicacionActaDef = $actaDefuncion ->IDUbicacionActaDef;
                $UbicacionActaDefuncion = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaDef) -> first();
                $UbicacionActaDefuncion->Libro = $request->numLibroD;
                $UbicacionActaDefuncion->Folio = $request->numFolioD;
                $UbicacionActaDefuncion->Asiento = $request->numAsientoD;
                $UbicacionActaDefuncion->save();
            }  else {
                if ($request->has('lugarDefuncion')) {
                    $UbicacionActaDefuncion = new UbicacionActa;
                    $UbicacionActaDefuncion->Libro = $request->numLibroD;
                    $UbicacionActaDefuncion->Folio = $request->numFolioD;
                    $UbicacionActaDefuncion->Asiento = $request->numAsientoD;
                    $UbicacionActaDefuncion->save();

                    $actaDefuncion = new ActaDefuncion;
                    $actaDefuncion->LugarDefuncion = $request->lugarDefuncion;
                    $actaDefuncion->FechaDefuncion = $request->fechaDefuncion;
                    $actaDefuncion->CausaMuerte = $request-> causaDefuncion;
                    $actaDefuncion->IDUbicacionActaDef = $UbicacionActaDefuncion->IDUbicacionActa;
                    $actaDefuncion-> save();

                    $acta -> IDDefuncion = $actaDefuncion->IDDefuncion;
                }
            }
            
            $acta -> save();
            return back()->with('msjBueno', "Se ha modificado el acta correctamente");
            return Redirect::to('/consultaAdmin');
            
        } catch(\Exception $e) {
            return back()->with('msjMalo', "Ha ocurrido un error al modificar el acta");
            return Redirect::to('/consultaAdmin');
        }
    } // fin actualizarActa
    
    public function EliminarActa($id) {
        try {
            $acta = Acta::where('IDPersona', $id) -> first();
    
            $idBautismo = $acta -> IDBautismo;
            $idConfirma = $acta -> IDConfirma;
            $idMatrimonio = $acta -> IDMatrimonio;
            $idDefuncion = $acta -> IDDefuncion;
            
            if($idBautismo != null) {
                $actaBautismo = ActaBautizo::where('IDBautismo', $idBautismo) -> first();
                $idUbicacionActaBau = $actaBautismo ->IDUbicacionActaBau;
                $UbicacionActaBautismo = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaBau) -> first();
                $UbicacionActaBautismo -> delete();
                $actaBautismo -> delete();
            }
            
            if($idConfirma != null) {
                $actaConfirma = ActaConfirma::where('IDConfirma', $idConfirma) -> first();
                $idUbicacionActaCon = $actaConfirma ->IDUbicacionActaCon;
                $UbicacionActaConfirma = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaCon) -> first();
                $UbicacionActaConfirma -> delete();
                $actaConfirma -> delete();
            }
            
            if($idMatrimonio != null) {
                $actaMatrimonio = ActaMatrimonio::where('IDMatrimonio', $idMatrimonio) -> first();
                $idUbicacionActaMat = $actaMatrimonio ->IDUbicacionActaMat;
                $UbicacionActaMatrimonio = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaMat) -> first();
                $UbicacionActaMatrimonio -> delete();
                $actaMatrimonio -> delete();
            }
            
            if($idDefuncion != null) {
                $actaDefuncion = ActaDefuncion::where('IDDefuncion', $idDefuncion) -> first();
                $idUbicacionActaDef = $actaDefuncion ->IDUbicacionActaDef;
                $UbicacionActaDefuncion = UbicacionActa::where('IDUbicacionActa', $idUbicacionActaDef) -> first();
                $UbicacionActaDefuncion -> delete();
                $actaDefuncion -> delete();
            }
            
            Persona::destroy($id);
            return back()->with('msjBueno', "Se ha eliminado el acta correctamente");
            return Redirect::to('/consultaAdmin');
            
        } catch(\Exception $e) {
            return back()->with('msjMalo', "Ha ocurrido un error al eliminar el acta");
            return Redirect::to('/consultaAdmin');
        }
    } // fin EliminarActa
    
    public function home() {
        $parroquias = \sistemaCuriaDiocesana\Parroquia::all();
        return view('AdminViews.mainActasAdmin', ['parroquias'=> $parroquias]);
    }
    
    public function crearActa(Request $request) {

        $Persona = new Persona;
        
        if ($request->has('nombrePadre')) {

            $Persona->Cedula = $request->numCedula;
            $Persona->Nombre = $request->nombre;
            $Persona->PrimerApellido = $request->apellido1;
            $Persona->SegundoApellido = $request->apellido2;

            $Persona->save();
            
            $Laico = new Laico;
            
            $Laico->IDPersona = $Persona->IDPersona;
            $Laico->IDTipo_Hijo = 2;
            $Laico->NombreMadre = $request->nombreMadre;
            $Laico->NombrePadre = $request->nombrePadre;
            $Laico->LugarNacimiento = $request->lugarNac;
            $Laico->FechaNacimiento = $request->fechaNac;
            
            $Laico->save();
        } else {

            $Persona->Cedula = $request->numCedula;
            $Persona->Nombre = $request->nombre;
            $Persona->PrimerApellido = $request->apellido1;
            $Persona->SegundoApellido = $request->apellido2;

            $Persona->save();
            
            
            $Laico = new Laico;
            
            $Laico->IDPersona = $Persona->IDPersona;
            $Laico->IDTipo_Hijo = 1;
            $Laico->NombreMadre = $request->nombreMadre;
            $Laico->LugarNacimiento = $request->lugarNac;
            $Laico->FechaNacimiento = $request->fechaNac;
            
            
            $Laico->save();
        }
        
        //------------------------------------------------------------------------------
        $Acta = new Acta;
        
        
        if ($request->has('lugarBautizo') || $request->has('lugarConfirma') || $request->has('lugarMatrimonio') || $request->has('lugarDefuncion')) {
        
        //------------------------------------------------------------------------------
        
        if ($request->has('lugarBautizo')) {
            $UbicacionActaB = new UbicacionActa;
            
            $UbicacionActaB->Libro = $request->numLibroB;
            $UbicacionActaB->Folio = $request->numFolioB;
            $UbicacionActaB->Asiento = $request->numAsientoB;
            
            $UbicacionActaB->save();
          
            $ActaBautizo = new ActaBautizo;
            
            $ActaBautizo->LugarBautismo = $request->lugarBautizo;
            $ActaBautizo->FechaBautismo = $request->fechaBautizo;
            $ActaBautizo->PadrinoBau1 = $request->nombreMadrinaB;
            $ActaBautizo-> PadrinoBau2 = $request->nombrePadrinoB;
            $ActaBautizo->IDUbicacionActaBau = $UbicacionActaB->IDUbicacionActa;
            $ActaBautizo-> save();
            
            $Acta->IDBautismo = $ActaBautizo-> IDBautismo;
            //-------------------------------------------------------
        }
        
         if ($request->has('lugarConfirma')) {
            $UbicacionActaC = new UbicacionActa;
            
            $UbicacionActaC->Libro = $request->numLibroC;
            $UbicacionActaC->Folio = $request->numFolioC;
            $UbicacionActaC->Asiento = $request->numAsientoC;
            $UbicacionActaC->save();
        
            $ActaConfirma = new ActaConfirma;
            
            $ActaConfirma->LugarConfirma = $request->lugarConfirma;
            $ActaConfirma->FechaConfirma = $request->fechaConfirma;
            $ActaConfirma->PadrinoCon1 = $request-> nombrePadrinoC1;
            $ActaConfirma->PadrinoCon2 = $request->nombrePadrinoC2;
            $ActaConfirma->IDUbicacionActaCon = $UbicacionActaC->IDUbicacionActa;
            $ActaConfirma-> save();
            
            $Acta->IDConfirma = $ActaConfirma->IDConfirma;
         }
             if ($request->has('lugarMatrimonio')) {
            $UbicacionActaM = new UbicacionActa;
            
            $UbicacionActaM->Libro = $request->numLibroM;
            $UbicacionActaM->Folio = $request->numFolioM;
            $UbicacionActaM->Asiento = $request->numAsientoM;
            
            $UbicacionActaM->save();
            
            $ActaMatrimonio = new ActaMatrimonio;
            
            $ActaMatrimonio->LugarMatrimonio = $request->lugarMatrimonio;
            $ActaMatrimonio->FechaMatrimonio = $request->fechaMatrimonio;
            $ActaMatrimonio->NombreConyugue = $request-> nombreConyuge;
            $ActaMatrimonio->IDUbicacionActaMat = $UbicacionActaM->IDUbicacionActa;
            $ActaMatrimonio-> save();
            
            $Acta->IDMatrimonio=$ActaMatrimonio->IDMatrimonio;
         }
         if ($request->has('lugarDefuncion')) {
            $UbicacionActaD = new UbicacionActa;
            
            $UbicacionActaD->Libro = $request->numLibroD;
            $UbicacionActaD->Folio = $request->numFolioD;
            $UbicacionActaD->Asiento = $request->numAsientoD;
            $UbicacionActaD->save();
            
            $ActaDefuncion = new ActaDefuncion;
            
            $ActaDefuncion->LugarDefuncion = $request->lugarDefuncion;
            $ActaDefuncion->FechaDefuncion = $request->fechaDefuncion;
            $ActaDefuncion->CausaMuerte = $request-> causaDefuncion;
            $ActaDefuncion->IDUbicacionActaDef = $UbicacionActaD->IDUbicacionActa;
            $ActaDefuncion-> save();
            
            $Acta->IDDefuncion = $ActaDefuncion->IDDefuncion;
         }
         if ($request->has('notasMarginales')) {
             $Acta->NotasMarginales = $request->notasMarginales;
         }
        }//fin if acta 
        
        $Acta->IDPersona = $Persona->IDPersona;
        $Acta->IDParroquia = $request->parroquia;
        $Acta-> save();
        
        return back()->with('msjBueno', "Se agregó el acta correctamente");
        return Redirect::to('/ActasAdmin');
    }
}
