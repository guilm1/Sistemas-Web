// Sintaxe:
// $(seletor).acao();
// $(seletor).acao(funtion(){});
// $(document).ready(function (){});

//document.getElementById("btnCalcular").addEventListener("click",funcao);

// Funcao que encapsula as demais
$(document).ready(function (){
  console.log("Documento Carregado.");

  $("p").click(function(){
    $(this).hide();
  });

  //Ocultar...
  $("button[name='ocultar']").click(function (){
    //$("div[id='texto']").hide();
    //para propriedade id em particular:
    $("#texto").hide();
    $("#links").hide();
  });

  $("button[name='exibir']").click(function (){
    //$("div").show();
    $("#texto").show();
    $("#links").show();
  });

  // $("button[name='alternar']").click(function(){});
  $("#mudar").click(function(){
    $("#texto").fadeToggle("slow");
    $("#links").toggle("slow");

  $("p").addClass("text-uppercase");
  $("p").removeClass("text-danger");
  $("#titulo").toggleClass("jumbotron");
  $("button").toggleClass("btn btn-primary");

    if($("#mudar").text() == "Alternar"){
      $("#mudar").text("Aparecer");
    }
    else{
      $("#mudar").text("Alternar");
    }
  });

  $("#validar").click(function(){
    // var est = document.dados.estados;
    // window.alert(est.value);
    // window.alert(est.options[est.selectedIndex].text);

    window.alert($("#selectEstado").val());
    window.alert($("#selectEstado option:selected").text());
  });
});
