{"filter":false,"title":"notificacionesAdmin.blade.php","tooltip":"/resources/views/AdminViews/notificacionesAdmin.blade.php","undoManager":{"mark":93,"position":93,"stack":[[{"start":{"row":82,"column":36},"end":{"row":82,"column":37},"action":"insert","lines":["/"],"id":2}],[{"start":{"row":82,"column":37},"end":{"row":82,"column":38},"action":"insert","lines":["/"],"id":3}],[{"start":{"row":82,"column":37},"end":{"row":82,"column":38},"action":"remove","lines":["/"],"id":4}],[{"start":{"row":82,"column":36},"end":{"row":82,"column":37},"action":"remove","lines":["/"],"id":5}],[{"start":{"row":82,"column":62},"end":{"row":82,"column":63},"action":"remove","lines":["]"],"id":6}],[{"start":{"row":82,"column":61},"end":{"row":82,"column":62},"action":"remove","lines":["0"],"id":7}],[{"start":{"row":82,"column":60},"end":{"row":82,"column":61},"action":"remove","lines":["["],"id":8}],[{"start":{"row":82,"column":59},"end":{"row":82,"column":60},"action":"remove","lines":["s"],"id":9}],[{"start":{"row":82,"column":58},"end":{"row":82,"column":59},"action":"remove","lines":["a"],"id":10}],[{"start":{"row":82,"column":57},"end":{"row":82,"column":58},"action":"remove","lines":["t"],"id":11}],[{"start":{"row":82,"column":56},"end":{"row":82,"column":57},"action":"remove","lines":["c"],"id":12}],[{"start":{"row":82,"column":55},"end":{"row":82,"column":56},"action":"remove","lines":["a"],"id":13}],[{"start":{"row":82,"column":55},"end":{"row":82,"column":56},"action":"insert","lines":["u"],"id":14}],[{"start":{"row":82,"column":56},"end":{"row":82,"column":57},"action":"insert","lines":["s"],"id":15}],[{"start":{"row":82,"column":57},"end":{"row":82,"column":58},"action":"insert","lines":["e"],"id":16}],[{"start":{"row":82,"column":58},"end":{"row":82,"column":59},"action":"insert","lines":["r"],"id":17}],[{"start":{"row":82,"column":71},"end":{"row":82,"column":72},"action":"remove","lines":["]"],"id":18}],[{"start":{"row":82,"column":70},"end":{"row":82,"column":71},"action":"remove","lines":["0"],"id":19}],[{"start":{"row":82,"column":69},"end":{"row":82,"column":70},"action":"remove","lines":["["],"id":20}],[{"start":{"row":77,"column":140},"end":{"row":77,"column":157},"action":"insert","lines":["<th>Ver acta</th>"],"id":21}],[{"start":{"row":84,"column":151},"end":{"row":85,"column":0},"action":"insert","lines":["",""],"id":22},{"start":{"row":85,"column":0},"end":{"row":85,"column":36},"action":"insert","lines":["                                    "]}],[{"start":{"row":91,"column":0},"end":{"row":91,"column":120},"action":"insert","lines":["+ '<td><a href=\"/solicitudRechazadaAdmin/'+data[i].IDSolicitud+'\"><i class=\"material-icons\">shuffle</i></a></td> </tr>';"],"id":27}],[{"start":{"row":80,"column":24},"end":{"row":89,"column":21},"action":"remove","lines":["content += '<tr><td>' + data[i].tipo.NombreTipo_Solicitud + '</td>'","                                    + '<td>' + data[i].user.Nombre + ' '+ data[i].user.PrimerApellido + ' ' + data[i].user.SegundoApellido + '</td>'","                                    + '<td>' + data[i].user.parroquia.NombreParroquia+ '</td>'","                                    + '<td>' + data[i].estado.NombreEstado_Solicitud + '</td>'","                                    + '<td><a class=\"desc\" href=\"#\" onClick = \"description('+i+');\"><i class=\"material-icons\">description</i></a></td>'","                                    ","                                    + '<td><a href=\"/solicitudAceptadaAdmin/'+data[i].IDSolicitud+'\"><i class=\"material-icons\">done</i></a></td>'","                                    + '<td id=\"desc'+i+'\" hidden>'+data[i].actas[0].pivot.Descripcion+'</td>'","                                    + '<td><a href=\"/solicitudRechazadaAdmin/'+data[i].IDSolicitud+'\"><i class=\"material-icons\">shuffle</i></a></td> </tr>';","                    }"],"id":28},{"start":{"row":80,"column":24},"end":{"row":99,"column":21},"action":"insert","lines":["if (data[i].IDTipo_Solicitud == 3) {","                            content += '<tr><td>' + data[i].tipo.NombreTipo_Solicitud + '</td>'","                                    + '<td>' + data[i].user.Nombre + ' '+ data[i].user.PrimerApellido + ' ' + data[i].user.SegundoApellido + '</td>'","                                    + '<td>' + data[i].user.parroquia.NombreParroquia+ '</td>'","                                    + '<td><strong><em>' + data[i].estado.NombreEstado_Solicitud + '</em></strong></td>'","                                    + '<td><a class=\"desc\" href=\"#\" onClick = \"description('+i+');\"><i class=\"material-icons\">description</i></a></td>'","                                    + '<td><a class=\"desc\" href=\"#\" onClick = \"description('+i+');\" disabled><i class=\"material-icons\">description</i></a></td>'","                                    + '<td><a href=\"/aceptarSolicitud/'+data[i].IDSolicitud+'\"><i class=\"material-icons\">done</i></a></td>'","                                    + '<td id=\"desc'+i+'\" hidden></td> </tr>';","                        } else {","                            content += '<tr><td>' + data[i].tipo.NombreTipo_Solicitud + '</td>'","                                    + '<td>' + data[i].user.Nombre + ' '+ data[i].user.PrimerApellido + ' ' + data[i].user.SegundoApellido + '</td>'","                                    + '<td>' + data[i].user.parroquia.NombreParroquia+ '</td>'","                                    + '<td><strong><em>' + data[i].estado.NombreEstado_Solicitud + '</em></strong></td>'","                                    + '<td><a class=\"desc\" href=\"#\" onClick = \"description('+i+');\"><i class=\"material-icons\">description</i></a></td>'","                                    + '<td><a class=\"desc\" href=\"#\" onClick = \"description('+i+');\"><i class=\"material-icons\">description</i></a></td>'","                                    + '<td><a href=\"/aceptarSolicitud/'+data[i].IDSolicitud+'\"><i class=\"material-icons\">done</i></a></td>'","                                    + '<td id=\"desc'+i+'\" hidden>'+data[i].actas[0].pivot.Descripcion+'</td> </tr>';","                        }","                    }"]}],[{"start":{"row":101,"column":0},"end":{"row":101,"column":120},"action":"remove","lines":["+ '<td><a href=\"/solicitudRechazadaAdmin/'+data[i].IDSolicitud+'\"><i class=\"material-icons\">shuffle</i></a></td> </tr>';"],"id":29}],[{"start":{"row":97,"column":115},"end":{"row":97,"column":116},"action":"remove","lines":[";"],"id":30}],[{"start":{"row":97,"column":115},"end":{"row":98,"column":0},"action":"insert","lines":["",""],"id":31},{"start":{"row":98,"column":0},"end":{"row":98,"column":36},"action":"insert","lines":["                                    "]}],[{"start":{"row":98,"column":36},"end":{"row":98,"column":156},"action":"insert","lines":["+ '<td><a href=\"/solicitudRechazadaAdmin/'+data[i].IDSolicitud+'\"><i class=\"material-icons\">shuffle</i></a></td> </tr>';"],"id":32}],[{"start":{"row":63,"column":8},"end":{"row":65,"column":13},"action":"insert","lines":["setTimeout(function() {","            $(\"#reload\").trigger('click');","        },1);"],"id":33}],[{"start":{"row":65,"column":13},"end":{"row":66,"column":0},"action":"insert","lines":["",""],"id":34},{"start":{"row":66,"column":0},"end":{"row":66,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":100,"column":36},"end":{"row":100,"column":37},"action":"insert","lines":["/"],"id":35}],[{"start":{"row":100,"column":37},"end":{"row":100,"column":38},"action":"insert","lines":["/"],"id":36}],[{"start":{"row":100,"column":38},"end":{"row":100,"column":117},"action":"remove","lines":["+ '<td id=\"desc'+i+'\" hidden>'+data[i].actas[0].pivot.Descripcion+'</td> </tr>'"],"id":37}],[{"start":{"row":100,"column":37},"end":{"row":100,"column":38},"action":"remove","lines":["/"],"id":38}],[{"start":{"row":100,"column":36},"end":{"row":100,"column":37},"action":"remove","lines":["/"],"id":39}],[{"start":{"row":100,"column":0},"end":{"row":100,"column":36},"action":"remove","lines":["                                    "],"id":40}],[{"start":{"row":99,"column":139},"end":{"row":100,"column":0},"action":"remove","lines":["",""],"id":41}],[{"start":{"row":100,"column":155},"end":{"row":101,"column":0},"action":"insert","lines":["",""],"id":42},{"start":{"row":101,"column":0},"end":{"row":101,"column":36},"action":"insert","lines":["                                    "]}],[{"start":{"row":101,"column":36},"end":{"row":101,"column":115},"action":"insert","lines":["+ '<td id=\"desc'+i+'\" hidden>'+data[i].actas[0].pivot.Descripcion+'</td> </tr>'"],"id":43}],[{"start":{"row":90,"column":139},"end":{"row":91,"column":0},"action":"insert","lines":["",""],"id":44},{"start":{"row":91,"column":0},"end":{"row":91,"column":36},"action":"insert","lines":["                                    "]}],[{"start":{"row":91,"column":36},"end":{"row":91,"column":155},"action":"insert","lines":["+ '<td><a href=\"/solicitudRechazadaAdmin/'+data[i].IDSolicitud+'\"><i class=\"material-icons\">shuffle</i></a></td> </tr>'"],"id":45}],[{"start":{"row":100,"column":53},"end":{"row":100,"column":69},"action":"remove","lines":["aceptarSolicitud"],"id":46},{"start":{"row":100,"column":53},"end":{"row":100,"column":75},"action":"insert","lines":["solicitudAceptadaAdmin"]}],[{"start":{"row":90,"column":53},"end":{"row":90,"column":69},"action":"remove","lines":["aceptarSolicitud"],"id":47},{"start":{"row":90,"column":53},"end":{"row":90,"column":75},"action":"insert","lines":["solicitudAceptadaAdmin"]}],[{"start":{"row":52,"column":8},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":48},{"start":{"row":53,"column":0},"end":{"row":53,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":53,"column":2},"end":{"row":54,"column":0},"action":"insert","lines":["",""],"id":49},{"start":{"row":54,"column":0},"end":{"row":54,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":54,"column":2},"end":{"row":55,"column":0},"action":"insert","lines":["",""],"id":50},{"start":{"row":55,"column":0},"end":{"row":55,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":55,"column":2},"end":{"row":64,"column":8},"action":"insert","lines":["<div id=\"modal1\" class=\"modal modal-fixed-footer\">","    <div class=\"modal-content\">","      <h4>Descripción de la solicitud</h4>","      <hr>","      <p id='descripcion'></p>","    </div>","    <div class=\"modal-footer\">","      <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat \">Cerrar</a>","    </div>","  </div>"],"id":51}],[{"start":{"row":54,"column":2},"end":{"row":54,"column":25},"action":"insert","lines":["<!--Modal Structure -->"],"id":52}],[{"start":{"row":57,"column":6},"end":{"row":59,"column":30},"action":"remove","lines":["<h4>Descripción de la solicitud</h4>","      <hr>","      <p id='descripcion'></p>"],"id":53}],[{"start":{"row":52,"column":8},"end":{"row":62,"column":8},"action":"remove","lines":["","  ","  <!--Modal Structure -->","  <div id=\"modal1\" class=\"modal modal-fixed-footer\">","    <div class=\"modal-content\">","      ","    </div>","    <div class=\"modal-footer\">","      <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat \">Cerrar</a>","    </div>","  </div>"],"id":142}],[{"start":{"row":99,"column":67},"end":{"row":99,"column":99},"action":"remove","lines":[" onClick = \"description('+i+');\""],"id":143}],[{"start":{"row":99,"column":65},"end":{"row":99,"column":66},"action":"remove","lines":["#"],"id":144}],[{"start":{"row":99,"column":65},"end":{"row":99,"column":66},"action":"insert","lines":["'"],"id":145}],[{"start":{"row":99,"column":66},"end":{"row":99,"column":67},"action":"insert","lines":["'"],"id":146}],[{"start":{"row":99,"column":66},"end":{"row":99,"column":67},"action":"insert","lines":["+"],"id":147}],[{"start":{"row":99,"column":67},"end":{"row":99,"column":68},"action":"insert","lines":["+"],"id":148}],[{"start":{"row":99,"column":67},"end":{"row":99,"column":68},"action":"insert","lines":["d"],"id":149}],[{"start":{"row":99,"column":68},"end":{"row":99,"column":69},"action":"insert","lines":["a"],"id":150}],[{"start":{"row":99,"column":69},"end":{"row":99,"column":70},"action":"insert","lines":["t"],"id":151}],[{"start":{"row":99,"column":70},"end":{"row":99,"column":71},"action":"insert","lines":["a"],"id":152}],[{"start":{"row":99,"column":71},"end":{"row":99,"column":72},"action":"insert","lines":["["],"id":153}],[{"start":{"row":99,"column":72},"end":{"row":99,"column":73},"action":"insert","lines":["]"],"id":154}],[{"start":{"row":99,"column":72},"end":{"row":99,"column":73},"action":"insert","lines":["i"],"id":155}],[{"start":{"row":99,"column":74},"end":{"row":99,"column":75},"action":"insert","lines":["."],"id":156}],[{"start":{"row":99,"column":75},"end":{"row":99,"column":76},"action":"insert","lines":["v"],"id":157}],[{"start":{"row":99,"column":76},"end":{"row":99,"column":77},"action":"insert","lines":["v"],"id":158}],[{"start":{"row":99,"column":77},"end":{"row":99,"column":78},"action":"insert","lines":["v"],"id":159}],[{"start":{"row":99,"column":77},"end":{"row":99,"column":78},"action":"remove","lines":["v"],"id":160}],[{"start":{"row":99,"column":76},"end":{"row":99,"column":77},"action":"remove","lines":["v"],"id":161}],[{"start":{"row":99,"column":75},"end":{"row":99,"column":76},"action":"remove","lines":["v"],"id":162}],[{"start":{"row":99,"column":75},"end":{"row":99,"column":76},"action":"insert","lines":["a"],"id":163}],[{"start":{"row":99,"column":76},"end":{"row":99,"column":77},"action":"insert","lines":["c"],"id":164}],[{"start":{"row":99,"column":77},"end":{"row":99,"column":78},"action":"insert","lines":["t"],"id":165}],[{"start":{"row":99,"column":78},"end":{"row":99,"column":79},"action":"insert","lines":["a"],"id":166}],[{"start":{"row":99,"column":79},"end":{"row":99,"column":80},"action":"insert","lines":["s"],"id":167}],[{"start":{"row":99,"column":80},"end":{"row":99,"column":81},"action":"insert","lines":["["],"id":168}],[{"start":{"row":99,"column":81},"end":{"row":99,"column":82},"action":"insert","lines":["]"],"id":169}],[{"start":{"row":99,"column":81},"end":{"row":99,"column":82},"action":"insert","lines":["0"],"id":170}],[{"start":{"row":99,"column":83},"end":{"row":99,"column":84},"action":"insert","lines":["."],"id":171}],[{"start":{"row":99,"column":84},"end":{"row":99,"column":85},"action":"insert","lines":["I"],"id":172}],[{"start":{"row":99,"column":85},"end":{"row":99,"column":86},"action":"insert","lines":["D"],"id":173}],[{"start":{"row":99,"column":86},"end":{"row":99,"column":87},"action":"insert","lines":["P"],"id":174}],[{"start":{"row":99,"column":87},"end":{"row":99,"column":88},"action":"insert","lines":["e"],"id":175}],[{"start":{"row":99,"column":88},"end":{"row":99,"column":89},"action":"insert","lines":["r"],"id":176}],[{"start":{"row":99,"column":89},"end":{"row":99,"column":90},"action":"insert","lines":["s"],"id":177}],[{"start":{"row":99,"column":90},"end":{"row":99,"column":91},"action":"insert","lines":["o"],"id":178}],[{"start":{"row":99,"column":91},"end":{"row":99,"column":92},"action":"insert","lines":["n"],"id":179}],[{"start":{"row":99,"column":92},"end":{"row":99,"column":93},"action":"insert","lines":["a"],"id":180}],[{"start":{"row":99,"column":65},"end":{"row":99,"column":66},"action":"insert","lines":["D"],"id":181}],[{"start":{"row":99,"column":66},"end":{"row":99,"column":67},"action":"insert","lines":["e"],"id":182}],[{"start":{"row":99,"column":67},"end":{"row":99,"column":68},"action":"insert","lines":["t"],"id":183}],[{"start":{"row":99,"column":68},"end":{"row":99,"column":69},"action":"insert","lines":["a"],"id":184}],[{"start":{"row":99,"column":69},"end":{"row":99,"column":70},"action":"insert","lines":["l"],"id":185}],[{"start":{"row":99,"column":70},"end":{"row":99,"column":71},"action":"insert","lines":["l"],"id":186}],[{"start":{"row":99,"column":71},"end":{"row":99,"column":72},"action":"insert","lines":["e"],"id":187}]]},"ace":{"folds":[],"scrolltop":886.5198516845703,"scrollleft":0,"selection":{"start":{"row":99,"column":72},"end":{"row":99,"column":72},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":337,"mode":"ace/mode/php"}},"timestamp":1499583028311,"hash":"025b99d8b595e9bc91bba615e299964c63d14478"}