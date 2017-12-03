
var posVerdad;

function mostrarResultados(){
  // document.getElementById("#o" + posVerdad).style.backgroundColor='#2EC4B6';
  alert("HOLA");
}


// Poner n opciones segun cuantas mentiras haya
if ($("#mt").val() == "3") {
    $("#Opciones").append("<button type=\"button\" class=\"btn btn-primary btn-lg btn-block\" style=\"margin-bottom:4px;white-space: normal;\" id=\"o4\"></button>");
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
