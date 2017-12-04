
$("#Crear").click(function() {


});

mentiradaGenerada = false;
function mentiras(numMentiras) {
  if (numMentiras == 3 && mentiradaGenerada == false) {
    $("#inputs").append("<input type=\"text\" class=\"form-control\" id=\"R4\" name=\"R4\" required>");
    mentiradaGenerada = true;
    $("#mentiras").val("3");
  } else if(numMentiras != 3 && mentiradaGenerada == true) {
    $("#R4").remove();
    mentiradaGenerada = false;
    $("#mentiras").val("2");
  }
}


function copyToClipboard(){
  var copyText = document.getElementById("linkOculto");
  copyText.select();
  document.execCommand("Copy");
  alert("¡Link copiado en el portapapeles!\nAhora pega el link en cualquiera de tus redes sociales. 👥");
}
