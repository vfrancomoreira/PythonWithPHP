<!DOCTYPE html>
<html lang="pt" >
<head>
  <meta charset="UTF-8">
  <title>DELIVERY</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="style.css">

<div class="login-page">
  <div class="form">
  <div align="center"><b><h2>EMAIL JA CADASTRADO</h2></b></div> 
    <div align="center"><img src="insta.png"  height="200" width="270"></div>
    <br>
    <form class="login-form" onsubmit="return verificaSenhas()"  action="cadastro2.php" method="post">
      <input type="text" placeholder="NOME" id = "nome" name="nome"/>
      <input type="password" id="senha" name="senha" placeholder="SENHA" required>
  <input type="password" id="confirmar_senha" placeholder="CONFIRMAR SENHA" name="confirmar_senha" required>
      <input type="text" placeholder="EMAIL" name="email" id ="email"/>
      <button>Criar Conta</button>
      <p class="message">Já é registrado <a href="login.php">entre aqui</a></p>
    </form>
   
<script>
  function verificaSenhas() {
    var senha = document.getElementById("senha").value;
    var confirmar_senha = document.getElementById("confirmar_senha").value;

    if (senha != confirmar_senha) {
      alert("As senhas não são iguais!");
      return false;
    }

    return true;
  }
</script>
  </div>
</div>