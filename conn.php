<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bot_wpp';
$conn = mysqli_connect($servidor,$usuario,$senha,$banco);

// A função die() interrompe e mostra a mensagem de depuração
// A função echo printa e continua a execução

if(!$conn){
    // die("Conexão falhou!" . mysqli_connect_error());
} else{
    // die("Conexão bem-sucedida!" . mysqli_connect_error());
}
?>