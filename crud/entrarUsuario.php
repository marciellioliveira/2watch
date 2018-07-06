<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

try {

    require_once('conexao.php');

    exec("SET CHARACTER SET utf8"); 
    $stmt = $con->prepare("SELECT email_user, senha_user FROM usuario WHERE email_user='".$email."' and senha_user='".$senha."'"); 
    $stmt->execute();
    $linhaConsulta = $stmt->fetchObject(); 

    if ($linhaConsulta) {
    //Login confirmado

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../pagina_inicial.php');

    } else {
    //Senha ou Email incorreto
        //unset($_SESSION['email']);
       // unset($_SESSION['senha']);
         session_destroy();
        echo "Email ou senha incorreto";

    }

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>

      <script>
        document.getElementById("enviaEmail").submit();
      </script>