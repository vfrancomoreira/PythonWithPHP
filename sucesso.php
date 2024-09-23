<!DOCTYPE html>
<html lang="pt" >
<head>
  <meta charset="UTF-8">
  <title>DELIVERY</title>
  <meta charset="utf-8">
  <meta name="author" content="Adtile">
  <meta name="viewport" content="width=device-width,initial-scale=1"> 
  <link rel="stylesheet" href="style.css">

<div class="login-page"> 
  <div class="form">
    <div align="center"><b><h2>Cadastrado com sucesso</h2></b></div>
    <div align="center"><b><h3>Faça o login abaixo</h3></b></div>
    <div align="center"><img src="insta.png"  height="200" width="270"></div>
    <br>
    <form class="login-form" action="autenticar.php" method="post"> 
    <input type="text" name="email" placeholder="Seu email" required/>
    <input type="password" name="senha" placeholder="senha" required/>
    <button type="submit">ENTRAR</button>
    <p class="message">Não tenho conta <a href="cadastro.php">Clica aqui</a></p>
    </form>
  </div>
</div>