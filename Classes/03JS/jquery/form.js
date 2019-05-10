function validar(campo, alerta, label){

  console.log("Validar: "+campo);

  // input[name='ValorX']
  // #idCampo
  var n = parseFloat($(campo).val());
  if($(campo).val().length == 0 || isNaN(n)){
    //Erro
    //Exibir alerta
    $(alerta).slideDown();
    //Adiciona erro ao label
    $(label).addClass("text-danger");
    //No input
    $(campo).addClass("is-invalid");
    $(campo).val("");
    $(campo).focus();
    return false;
  }
  // Tudo Correto
  //Oculta alerta
  $(alerta).hide();
  $(campo).removeClass("is-invalid");
  $(label).removeClass("text-danger");
  $(campo).addClass("is-valid");
  // document.getElementById(alerta).style.display = "none";
  // campo.classList.remove("is-invalid");
  // document.getElementById(label).classList.remove("text-danger");
  // campo.classList.add("is-valid");
  // document.getElementById(label).classList.add("text-success");
  return true;
}

$(document).ready(function(){
  // $("button[name='calculo']")
  $("#calculo").click(function(){
    if(validar("input[name='valor1']", "#alerta1", "#labelv1")
    && validar("input[name='valor2']", "#alerta2", "#labelv2")){
      var n1 = parseFloat($("input[name='valor1']").val());
      var n2 = parseFloat($("input[name='valor2']").val());

      $("input[name='resultado']").val(n1+n2);
    }else{
      $("input[name='resultado']").val("");
    }
      });
});
