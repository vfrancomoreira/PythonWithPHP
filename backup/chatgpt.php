<?php
session_start();
require_once('conn.php');

// Verifica se os campos 'email' e 'senha' foram enviados pelo formulário
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email_cliente = $_POST['email'];
    $senha_cliente = $_POST['senha'];

    $busca_email = "SELECT * FROM login WHERE email = '$email_cliente' AND senha = '$senha_cliente'";
    $resultado_busca = mysqli_query($conn, $busca_email);

    if (!$resultado_busca) {
        die("Erro na consulta ao banco de dados: " . mysqli_error($conn));
    }

    $total_clientes = mysqli_num_rows($resultado_busca);

    // Debug
    echo "Total de clientes: $total_clientes<br>";

    if ($total_clientes == 1) {
        $_SESSION['email'] = $email_cliente;
        $_SESSION['senha'] = $senha_cliente;

        // Debug
        echo "Autenticação bem-sucedida. Redirecionando para index.php";
        
        header("Location: index.php");
        exit();
    } else {
        // Debug
        die("Autenticação falhou. Redirecionando para login_falhou.php");
        
        header("Location: login_falhou.php");
        exit();
    }
} else {
    // Se 'email' ou 'senha' não foram enviados pelo formulário
    die("Dados de login não recebidos. Redirecionando para login_falhou.php");
    header("Location: login_falhou.php");
    exit();
}
?>








<?php
session_start();
require_once('conn.php');

$email_cliente = $_POST['email'];
$senha_cliente = $_POST['senha'];


$busca_email = "SELECT * FROM login WHERE email = '$email_cliente' AND senha = '$senha_cliente'";
$resultado_busca = mysqli_query($conn, $busca_email);
$total_clientes = mysqli_num_rows($resultado_busca);

if($total_clientes == 1){

$_SESSION['email'] = $email_cliente;
$_SESSION['senha'] = $senha_cliente;

echo "<meta http-equiv='refresh' content='0;url=index.php'>";   

 }else{

echo "<meta http-equiv='refresh' content='0;url=login_falhou.php'>";
 }
?>