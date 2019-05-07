function conferirCliente(){
  var r1 = document.cadastro.nomeCliente;
  var r2 = document.cadastro.endereco;
  var r3 = document.cadastro.telefone;
  var r4 = document.cadastro.selectCidade;
  var r5 = document.cadastro.email;
  var r6 = document.cadastro.usuario;
  var r7 = document.cadastro.senha;
  var r8 = document.cadastro.ccnome.value;
  if(validarCliente(r1,"alertaCliente","labelCliente") && validarCliente(r2,"alertaEndereco","labelEndereco")
    && validarAuxCliente(r3,"alertaTelefone","labelTelefone") && validarRadioCliente("alertaGenero","labelGenero")
    && validarCheckBoxCliente("alertaInteresse","labelInteresse") && validarSelectCliente(r4,"alertaCidade", "labelCidade")
    && validarCliente(r5,"alertaEmail","labelEmail") && validarCliente(r6,"alertaUsuario","labelUsuario")
    && validarSenha(r7,"alertaSenha","labelSenha") && (document.getElementById("paypal").checked ||
    document.getElementById("debito").checked||document.getElementById("credito").checked)
    && !isNaN(r8)) {
  // && validarRadioCliente("alerta2","labelUnidadeMedida")
  //   && validarAuxCliente(v2,"alerta3","labelPesoProduto") && validarAuxCliente(v3,"alerta4","labelValorProduto")
  //   && validarCheckBoxCliente("alerta5","labelMercado") && validarAuxCliente(v4,"alerta6","labelEstoqueProduto")
  //   && validarSelectCliente(v5,"alerta7", "labelFornecedor")) {
      alert("Seu Cadastro foi Efetuado com Sucesso!");
      return true;
  }
}
function validarSenha(campo, alerta, label){
  if(campo.value.length<8 ||campo.value.length>20){
    document.getElementById(alerta).style.display = "block";
    document.getElementById(label).classList.add("text-danger");
    campo.classList.add("is-invalid");
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
function validarCliente(campo, alerta, label){
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
function validarAuxCliente(campo, alerta, label){
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
function validarRadioCliente(alerta,label){
      var a1 = document.getElementById('masculino').checked;
      var a2 = document.getElementById('feminino').checked;
      var a3 = document.getElementById('outros').checked;
      if(a1 == true || a2 == true || a3 == true){
        // Tudo Correto
        document.getElementById(alerta).style.display = "none";
        document.getElementById(label).classList.remove("text-danger");
        document.getElementById("labelRad1").classList.remove("text-danger");
        document.getElementById("labelRad2").classList.remove("text-danger");
        document.getElementById("labelRad3").classList.remove("text-danger");
        document.getElementById("labelRad1").classList.add("text-success");
        document.getElementById("labelRad2").classList.add("text-success");
        document.getElementById("labelRad3").classList.add("text-success");
        document.getElementById(label).classList.add("text-success");
        return true;
      }
      document.getElementById(alerta).style.display = "block";
      document.getElementById(label).classList.add("text-danger");
      document.getElementById("labelRad1").classList.add("text-danger");
      document.getElementById("labelRad2").classList.add("text-danger");
      document.getElementById("labelRad3").classList.add("text-danger");
      document.getElementById('masculino').focus();
      return false;
    }
function validarCheckBoxCliente(alerta,label){
          var b1 = document.getElementById('esportes').checked;
          var b2 = document.getElementById('fashion').checked;
          var b3 = document.getElementById('casual').checked;
          if(b1 == true || b2 == true || b3 == true){
            // Tudo Correto
            document.getElementById(alerta).style.display = "none";
            document.getElementById(label).classList.remove("text-danger");
            document.getElementById("labelInt1").classList.remove("text-danger");
            document.getElementById("labelInt2").classList.remove("text-danger");
            document.getElementById("labelInt3").classList.remove("text-danger");
            document.getElementById("labelInt1").classList.add("text-success");
            document.getElementById("labelInt2").classList.add("text-success");
            document.getElementById("labelInt3").classList.add("text-success");
            document.getElementById(label).classList.add("text-success");
            return true;
          }
          document.getElementById(alerta).style.display = "block";
          document.getElementById(label).classList.add("text-danger");
          document.getElementById("labelInt1").classList.add("text-danger");
          document.getElementById("labelInt2").classList.add("text-danger");
          document.getElementById("labelInt3").classList.add("text-danger");
          return false;
        }
function termos(){
  var t1 = document.getElementById('aceite').checked;
  if(t1 == true){
    // Tudo Correto
    document.getElementById("labelTermos").classList.remove("text-danger");
    document.getElementById("labelTermos").classList.add("text-success");
    return true;
  }
  document.getElementById("labelTermos").classList.add("text-danger");
  return false;
}
function validarSelectCliente(campo,alerta,label){
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
