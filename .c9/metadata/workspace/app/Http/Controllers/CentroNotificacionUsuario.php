{"filter":false,"title":"CentroNotificacionUsuario.php","tooltip":"/app/Http/Controllers/CentroNotificacionUsuario.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":88,"column":41},"end":{"row":88,"column":42},"action":"remove","lines":["a"],"id":1015}],[{"start":{"row":88,"column":40},"end":{"row":88,"column":41},"action":"remove","lines":["t"],"id":1016}],[{"start":{"row":88,"column":39},"end":{"row":88,"column":40},"action":"remove","lines":["l"],"id":1017}],[{"start":{"row":88,"column":38},"end":{"row":88,"column":39},"action":"remove","lines":["u"],"id":1018}],[{"start":{"row":88,"column":37},"end":{"row":88,"column":38},"action":"remove","lines":["s"],"id":1019}],[{"start":{"row":88,"column":36},"end":{"row":88,"column":37},"action":"remove","lines":["n"],"id":1020}],[{"start":{"row":88,"column":35},"end":{"row":88,"column":36},"action":"remove","lines":["o"],"id":1021}],[{"start":{"row":88,"column":34},"end":{"row":88,"column":35},"action":"remove","lines":["c"],"id":1022}],[{"start":{"row":88,"column":34},"end":{"row":88,"column":35},"action":"insert","lines":["n"],"id":1023}],[{"start":{"row":88,"column":35},"end":{"row":88,"column":36},"action":"insert","lines":["o"],"id":1024}],[{"start":{"row":88,"column":36},"end":{"row":88,"column":37},"action":"insert","lines":["t"],"id":1025}],[{"start":{"row":88,"column":37},"end":{"row":88,"column":38},"action":"insert","lines":["i"],"id":1026}],[{"start":{"row":88,"column":38},"end":{"row":88,"column":39},"action":"insert","lines":["f"],"id":1027}],[{"start":{"row":88,"column":39},"end":{"row":88,"column":40},"action":"insert","lines":["i"],"id":1028}],[{"start":{"row":88,"column":40},"end":{"row":88,"column":41},"action":"insert","lines":["c"],"id":1029}],[{"start":{"row":88,"column":41},"end":{"row":88,"column":42},"action":"insert","lines":["a"],"id":1030}],[{"start":{"row":88,"column":42},"end":{"row":88,"column":43},"action":"insert","lines":["c"],"id":1031}],[{"start":{"row":88,"column":43},"end":{"row":88,"column":44},"action":"insert","lines":["i"],"id":1032}],[{"start":{"row":88,"column":44},"end":{"row":88,"column":45},"action":"insert","lines":["o"],"id":1033}],[{"start":{"row":88,"column":45},"end":{"row":88,"column":46},"action":"insert","lines":["n"],"id":1034}],[{"start":{"row":88,"column":46},"end":{"row":88,"column":47},"action":"insert","lines":["e"],"id":1035}],[{"start":{"row":88,"column":47},"end":{"row":88,"column":48},"action":"insert","lines":["s"],"id":1036}],[{"start":{"row":92,"column":34},"end":{"row":92,"column":47},"action":"remove","lines":["consultaAdmin"],"id":1037},{"start":{"row":92,"column":34},"end":{"row":92,"column":35},"action":"insert","lines":["n"]}],[{"start":{"row":92,"column":35},"end":{"row":92,"column":36},"action":"insert","lines":["o"],"id":1038}],[{"start":{"row":92,"column":36},"end":{"row":92,"column":37},"action":"insert","lines":["t"],"id":1039}],[{"start":{"row":92,"column":37},"end":{"row":92,"column":38},"action":"insert","lines":["i"],"id":1040}],[{"start":{"row":92,"column":34},"end":{"row":92,"column":38},"action":"remove","lines":["noti"],"id":1041},{"start":{"row":92,"column":34},"end":{"row":92,"column":48},"action":"insert","lines":["notificaciones"]}],[{"start":{"row":47,"column":16},"end":{"row":47,"column":65},"action":"remove","lines":["$acta = Acta::where('IDPersona', $id) -> first();"],"id":1042},{"start":{"row":47,"column":16},"end":{"row":49,"column":50},"action":"insert","lines":["$sol_acta = \\sistemaCuriaDiocesana\\Solicitud_Acta::find($id);","                    ","            $acta = Acta::find($sol_acta->IDActa);"]}],[{"start":{"row":88,"column":31},"end":{"row":88,"column":32},"action":"remove","lines":["d"],"id":1043}],[{"start":{"row":88,"column":30},"end":{"row":88,"column":31},"action":"remove","lines":["i"],"id":1044}],[{"start":{"row":88,"column":30},"end":{"row":88,"column":31},"action":"insert","lines":["a"],"id":1045}],[{"start":{"row":88,"column":31},"end":{"row":88,"column":32},"action":"insert","lines":["c"],"id":1046}],[{"start":{"row":88,"column":32},"end":{"row":88,"column":33},"action":"insert","lines":["t"],"id":1047}],[{"start":{"row":88,"column":33},"end":{"row":88,"column":34},"action":"insert","lines":["a"],"id":1048}],[{"start":{"row":88,"column":34},"end":{"row":88,"column":35},"action":"insert","lines":["-"],"id":1049}],[{"start":{"row":88,"column":35},"end":{"row":88,"column":36},"action":"insert","lines":[">"],"id":1050}],[{"start":{"row":88,"column":36},"end":{"row":88,"column":37},"action":"insert","lines":["I"],"id":1051}],[{"start":{"row":88,"column":37},"end":{"row":88,"column":38},"action":"insert","lines":["D"],"id":1052}],[{"start":{"row":88,"column":38},"end":{"row":88,"column":39},"action":"insert","lines":["P"],"id":1053}],[{"start":{"row":88,"column":39},"end":{"row":88,"column":40},"action":"insert","lines":["e"],"id":1054}],[{"start":{"row":88,"column":40},"end":{"row":88,"column":41},"action":"insert","lines":["r"],"id":1055}],[{"start":{"row":88,"column":41},"end":{"row":88,"column":42},"action":"insert","lines":["o"],"id":1056}],[{"start":{"row":88,"column":42},"end":{"row":88,"column":43},"action":"insert","lines":["s"],"id":1057}],[{"start":{"row":88,"column":43},"end":{"row":88,"column":44},"action":"insert","lines":["n"],"id":1058}],[{"start":{"row":88,"column":44},"end":{"row":88,"column":45},"action":"insert","lines":["a"],"id":1059}],[{"start":{"row":88,"column":44},"end":{"row":88,"column":45},"action":"remove","lines":["a"],"id":1060}],[{"start":{"row":88,"column":43},"end":{"row":88,"column":44},"action":"remove","lines":["n"],"id":1061}],[{"start":{"row":88,"column":42},"end":{"row":88,"column":43},"action":"remove","lines":["s"],"id":1062}],[{"start":{"row":88,"column":41},"end":{"row":88,"column":42},"action":"remove","lines":["o"],"id":1063}],[{"start":{"row":88,"column":41},"end":{"row":88,"column":42},"action":"insert","lines":["s"],"id":1064}],[{"start":{"row":88,"column":42},"end":{"row":88,"column":43},"action":"insert","lines":["o"],"id":1065}],[{"start":{"row":88,"column":43},"end":{"row":88,"column":44},"action":"insert","lines":["n"],"id":1066}],[{"start":{"row":88,"column":44},"end":{"row":88,"column":45},"action":"insert","lines":["a"],"id":1067}],[{"start":{"row":88,"column":45},"end":{"row":88,"column":48},"action":"insert","lines":["   "],"id":1068}],[{"start":{"row":88,"column":47},"end":{"row":88,"column":48},"action":"remove","lines":[" "],"id":1069}],[{"start":{"row":88,"column":46},"end":{"row":88,"column":47},"action":"remove","lines":[" "],"id":1070}],[{"start":{"row":88,"column":45},"end":{"row":88,"column":46},"action":"remove","lines":[" "],"id":1071}],[{"start":{"row":88,"column":47},"end":{"row":89,"column":0},"action":"insert","lines":["",""],"id":1072},{"start":{"row":89,"column":0},"end":{"row":89,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":89,"column":12},"end":{"row":89,"column":13},"action":"insert","lines":["S"],"id":1073}],[{"start":{"row":89,"column":13},"end":{"row":89,"column":14},"action":"insert","lines":["o"],"id":1074}],[{"start":{"row":89,"column":14},"end":{"row":89,"column":15},"action":"insert","lines":["l"],"id":1075}],[{"start":{"row":89,"column":15},"end":{"row":89,"column":16},"action":"insert","lines":["i"],"id":1076}],[{"start":{"row":89,"column":16},"end":{"row":89,"column":17},"action":"insert","lines":["c"],"id":1077}],[{"start":{"row":89,"column":17},"end":{"row":89,"column":18},"action":"insert","lines":["i"],"id":1078}],[{"start":{"row":89,"column":18},"end":{"row":89,"column":19},"action":"insert","lines":["t"],"id":1079}],[{"start":{"row":89,"column":19},"end":{"row":89,"column":20},"action":"insert","lines":["u"],"id":1080}],[{"start":{"row":89,"column":20},"end":{"row":89,"column":21},"action":"insert","lines":["d"],"id":1081}],[{"start":{"row":89,"column":21},"end":{"row":89,"column":22},"action":"insert","lines":[":"],"id":1082}],[{"start":{"row":89,"column":22},"end":{"row":89,"column":23},"action":"insert","lines":[":"],"id":1083}],[{"start":{"row":89,"column":23},"end":{"row":89,"column":24},"action":"insert","lines":["d"],"id":1084}],[{"start":{"row":89,"column":24},"end":{"row":89,"column":25},"action":"insert","lines":["e"],"id":1085}],[{"start":{"row":89,"column":25},"end":{"row":89,"column":26},"action":"insert","lines":["s"],"id":1086}],[{"start":{"row":89,"column":26},"end":{"row":89,"column":27},"action":"insert","lines":["t"],"id":1087}],[{"start":{"row":89,"column":27},"end":{"row":89,"column":28},"action":"insert","lines":["r"],"id":1088}],[{"start":{"row":89,"column":28},"end":{"row":89,"column":29},"action":"insert","lines":["o"],"id":1089}],[{"start":{"row":89,"column":29},"end":{"row":89,"column":30},"action":"insert","lines":["y"],"id":1090}],[{"start":{"row":89,"column":30},"end":{"row":89,"column":32},"action":"insert","lines":["()"],"id":1091}],[{"start":{"row":89,"column":32},"end":{"row":89,"column":33},"action":"insert","lines":[";"],"id":1092}],[{"start":{"row":89,"column":31},"end":{"row":89,"column":32},"action":"insert","lines":["$"],"id":1093}],[{"start":{"row":89,"column":32},"end":{"row":89,"column":33},"action":"insert","lines":["i"],"id":1094}],[{"start":{"row":89,"column":33},"end":{"row":89,"column":34},"action":"insert","lines":["d"],"id":1095}],[{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":1096}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":35},"action":"insert","lines":["use sistemaCuriaDiocesana\\Solicitud"],"id":1097}],[{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"insert","lines":[";"],"id":1098}],[{"start":{"row":168,"column":19},"end":{"row":168,"column":52},"action":"remove","lines":["view('UserViews.notificaciones');"],"id":1099},{"start":{"row":168,"column":19},"end":{"row":168,"column":51},"action":"insert","lines":["Redirect::to('/notificaciones');"]}],[{"start":{"row":4,"column":28},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":1100}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":28},"action":"insert","lines":["use Illuminate\\Http\\Request;"],"id":1101}],[{"start":{"row":5,"column":20},"end":{"row":5,"column":27},"action":"remove","lines":["Request"],"id":1102}],[{"start":{"row":5,"column":20},"end":{"row":5,"column":21},"action":"insert","lines":["R"],"id":1103}],[{"start":{"row":5,"column":21},"end":{"row":5,"column":22},"action":"insert","lines":["e"],"id":1104}],[{"start":{"row":5,"column":22},"end":{"row":5,"column":23},"action":"insert","lines":["d"],"id":1105}],[{"start":{"row":5,"column":23},"end":{"row":5,"column":24},"action":"insert","lines":["i"],"id":1106}],[{"start":{"row":5,"column":24},"end":{"row":5,"column":25},"action":"insert","lines":["r"],"id":1107}],[{"start":{"row":5,"column":25},"end":{"row":5,"column":26},"action":"insert","lines":["e"],"id":1108}],[{"start":{"row":5,"column":26},"end":{"row":5,"column":27},"action":"insert","lines":["c"],"id":1109}],[{"start":{"row":5,"column":27},"end":{"row":5,"column":28},"action":"insert","lines":["t"],"id":1110}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":29},"action":"remove","lines":["use Illuminate\\Http\\Redirect;"],"id":1111},{"start":{"row":5,"column":0},"end":{"row":5,"column":40},"action":"insert","lines":["use Illuminate\\Support\\Facades\\Redirect;"]}],[{"start":{"row":150,"column":12},"end":{"row":150,"column":13},"action":"insert","lines":["/"],"id":1112}],[{"start":{"row":150,"column":13},"end":{"row":150,"column":14},"action":"insert","lines":["/"],"id":1113}],[{"start":{"row":152,"column":12},"end":{"row":152,"column":13},"action":"insert","lines":["/"],"id":1114}],[{"start":{"row":152,"column":13},"end":{"row":152,"column":14},"action":"insert","lines":["/"],"id":1115}]]},"ace":{"folds":[],"scrolltop":1609,"scrollleft":0,"selection":{"start":{"row":150,"column":14},"end":{"row":152,"column":33},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":337,"mode":"ace/mode/php"}},"timestamp":1499640201970,"hash":"daf862b8c0f8c529c41c73255ebd6d67fd26d764"}