
var posVerdad;

function mostrarResultados(){
  for (var i = 1; i <= parseInt($("#mt").val())+1; i++) {
    $("#o" + i).css("background-color", "#E71D36");
    $("#o" + i).css("color", "white");
  }
  $("#o" + posVerdad).css("background-color", "#2EC4B6");
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
