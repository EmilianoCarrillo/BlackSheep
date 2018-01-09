// GET VARIABLES PHP
var parts = window.location.search.substr(1).split("&");
var $_GET = {};
for (var i = 0; i < parts.length; i++) {
    var temp = parts[i].split("=");
    $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
}

var URLid = $_GET['v'];


// COOKIES
//Checar si localStorage es compatible.
if (typeof(Storage) !== "undefined") {
if(localStorage.arrayIds)
{
    var ids= JSON.parse(localStorage["arrayIds"]);
    var fin=JSON.parse(localStorage.NId);
    for(var i=0;i<fin;i++)
    {
      if(ids[i]==URLid)
      for (var i = 1; i <= 4 ; i++) {
        $("#o" + i).css( 'pointer-events', 'none' );
      }
    }
    ids[fin]=URLid;
    localStorage.NId=fin;
    localStorage["arrayIds"]=JSON.stringify(ids);
}else{
  localStorage.NId=1;
  var arrayIds= new Array();
  arrayIds[0]=URLid;
  localStorage["arrayIds"]=JSON.stringify(arrayIds);
}



} else {
  // local storage no compatible
  alert("ERROR: TU NAVEGADOR NO TIENE SOPORTE PARA LOCAL STORAGE");
}




//CODE
var posVerdad;

function mostrarResultados(numBoton){
  for (var i = 1; i <= parseInt($("#mt").val())+1; i++) {
    $("#o" + i).css("background-color", "#E71D36");
    $("#o" + i).css("color", "white");
  }
  $("#o" + posVerdad).css("background-color", "#2EC4B6");

  $("#Personas").val(parseInt($("#Personas").val()) +1);
  var totalPersonas = $("#Personas").val();
  $("#Pr" + numBoton).val( parseInt($("#Pr" + numBoton).val()) + 1);
  for (var i = 1; i <= 4; i++) {
      var numClickBoton = parseInt($("#Pr" + i).val());
      var textoBtn = $("#o" + i).text();

      var obj = $("#o" + i).text( textoBtn + "\n" + numClickBoton*100/totalPersonas + "%");
      obj.html(obj.html().replace(/\n/g,'<br/>'));

      $("#o" + i).css( 'pointer-events', 'none' );
  }

}


// Poner n opciones segun cuantas mentiras haya
if ($("#mt").val() == "3") {
    $("#Opciones").append("<button type=\"button\" class=\"btn btn-primary btn-lg btn-block\" style=\"margin-bottom:4px;white-space: normal;\" id=\"o4\"onclick=\"mostrarResultados(4)\"></button>");
    posVerdad = Math.floor(Math.random() * 4) + 1;
} else if($("#mt").val() == "2") {
    $("#o4").remove();
    posVerdad = Math.floor(Math.random() * 3) + 1;
}



$("#o" + posVerdad).text($("#r1").val());

if($("#mt").val() == "2"){
  if (posVerdad == 1) {
    $("#o2").text($("#r2").val());
    $("#o3").text($("#r3").val());
  } else if (posVerdad == 2){
    $("#o1").text($("#r2").val());
    $("#o3").text($("#r3").val());
  } else if (posVerdad == 3){
    $("#o1").text($("#r2").val());
    $("#o2").text($("#r3").val());
  }
} else if($("#mt").val() == "3") {
  if (posVerdad == 1) {
    $("#o2").text($("#r2").val());
    $("#o3").text($("#r3").val());
    $("#o4").text($("#r4").val());
  } else if (posVerdad == 2){
    $("#o1").text($("#r2").val());
    $("#o3").text($("#r3").val());
    $("#o4").text($("#r4").val());
  } else if (posVerdad == 3){
    $("#o1").text($("#r2").val());
    $("#o2").text($("#r3").val());
    $("#o4").text($("#r4").val());
  } else if(posVerdad == 4){
    $("#o1").text($("#r2").val());
    $("#o2").text($("#r3").val());
    $("#o3").text($("#r4").val());
  }
}
