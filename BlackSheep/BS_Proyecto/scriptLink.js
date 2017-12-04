
$(document).ready(function() {

  var link = $("#linkOculto").val();

  var buttonsString = "<a class=\"aTag\"href=\"http://www.facebook.com/sharer/sharer.php?u="+link+"\" target=\"_blank\" class=\"share-btn facebook\"><button id=\"Facebook\" type=\"button\" class=\"btn btn-primary btn-lg btn-block rounded\"><i class=\"fa fa-facebook\"></i></button></a><a class=\"aTag\"href=\"http://twitter.com/share?url="+ link +"&text=%23BlackSheep%20Me%20conoces%20bien?%20Cuál%20de%20estos%20enunciados%20sobre%20mi%20es%20verdadero?%20\" target=\"_blank\" class=\"share-btn t\"><button id=\"Twitter\" type=\"button\" class=\"btn btn-primary btn-lg btn-block rounded\"><i class=\"fa fa-twitter\"></i></button></a>"
  $("#socialButtons").append(buttonsString);
});
