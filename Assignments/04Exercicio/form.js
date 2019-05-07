function conferir(){
  var v1 = document.dados.nomeProduto;
  var v2 = document.dados.peso;
  var v3 = document.dados.valor;
  var v4 = document.dados.estoque;
  var v5 = document.dados.selectValid;
  var camp = document.dados.ultimo;
  if(validar(v1,"alerta1","labelNomeProduto") && validarRadio("alerta2","labelUnidadeMedida")
    && validarAux(v2,"alerta3","labelPesoProduto") && validarAux(v3,"alerta4","labelValorProduto")
    && validarCheckBox("alerta5","labelMercado") && validarAux(v4,"alerta6","labelEstoqueProduto")
    && validarSelect(v5,"alerta7", "labelFornecedor")) {
      alert("Cadastro Efetuado com Sucesso!");
      return true;
  }
}
function validar(campo, alerta, label){
      var n = campo.value;
      if(campo.value.length == 0 || !isNaN(n)){
        document.getElementById(alerta).style.display = "block";
        document.getElementById(label).classList.add("text-danger");
        campo.classList.add("is-invalid");
        campo.value = "";
        campo.focus();
        return false;
      }
      // Tudo Correto
      document.getElementById(alerta).style.display = "none";
      campo.classList.remove("is-invalid");
      document.getElementById(label).classList.remove("text-danger");
      campo.classList.add("is-valid");
      document.getElementById(label).classList.add("text-success");
      return true;
    }
function validarAux(campo, alerta, label){
        var n = campo.value;
        if(campo.value.length == 0 || isNaN(n)){
          document.getElementById(alerta).style.display = "block";
          document.getElementById(label).classList.add("text-danger");
          campo.classList.add("is-invalid");
          campo.value = "";
          campo.focus();
          return false;
        }
        // Tudo Correto
        document.getElementById(alerta).style.display = "none";
        campo.classList.remove("is-invalid");
        document.getElementById(label).classList.remove("text-danger");
        campo.classList.add("is-valid");
        document.getElementById(label).classList.add("text-success");
        return true;
      }
function validarRadio(alerta,label){
      var a1 = document.getElementById('quilo').checked;
      var a2 = document.getElementById('grama').checked;
      var a3 = document.getElementById('mili').checked;
      if(a1 == true || a2 == true || a3 == true){
        // Tudo Correto
        document.getElementById(alerta).style.display = "none";
        document.getElementById(label).classList.remove("text-danger");
        document.getElementById("labelv1").classList.remove("text-danger");
        document.getElementById("labelv2").classList.remove("text-danger");
        document.getElementById("labelv3").classList.remove("text-danger");
        document.getElementById("labelv1").classList.add("text-success");
        document.getElementById("labelv2").classList.add("text-success");
        document.getElementById("labelv3").classList.add("text-success");
        document.getElementById(label).classList.add("text-success");
        return true;
      }
      document.getElementById(alerta).style.display = "block";
      document.getElementById(label).classList.add("text-danger");
      document.getElementById("labelv1").classList.add("text-danger");
      document.getElementById("labelv2").classList.add("text-danger");
      document.getElementById("labelv3").classList.add("text-danger");
      return false;
    }
function validarCheckBox(alerta,label){
          var b1 = document.getElementById('interno').checked;
          var b2 = document.getElementById('externo').checked;
          if(b1 == true || b2 == true){
            // Tudo Correto
            document.getElementById(alerta).style.display = "none";
            document.getElementById(label).classList.remove("text-danger");
            document.getElementById("label1").classList.remove("text-danger");
            document.getElementById("label2").classList.remove("text-danger");
            document.getElementById("label1").classList.add("text-success");
            document.getElementById("label2").classList.add("text-success");
            document.getElementById(label).classList.add("text-success");
            return true;
          }
          document.getElementById(alerta).style.display = "block";
          document.getElementById(label).classList.add("text-danger");
          document.getElementById("label1").classList.add("text-danger");
          document.getElementById("label2").classList.add("text-danger");
          return false;
        }
function validarSelect(campo,alerta,label){
  if(campo.value == 0){
    document.getElementById(alerta).style.display = "block";
    document.getElementById(label).classList.add("text-danger");
    campo.classList.add("is-invalid");
    campo.value = 0;
    campo.focus();
    return false;
  }
  document.getElementById(alerta).style.display = "none";
  campo.classList.remove("is-invalid");
  document.getElementById(label).classList.remove("text-danger");
  campo.classList.add("is-valid");
  document.getElementById(label).classList.add("text-success");
  return true;
}
