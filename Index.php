<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index_style.css">
    <title>Login</title>
    <style>
    p{
    color: white;
    }
</style>
</head>
<body>

    <?php
    //serve para ocultar os erros da página
    error_reporting(0);
    ini_set('display_errors', 0);
    session_start();
    //caso o usuario não tenha se conectado ainda
    if(!isset($_SESSION['logado'])){
        echo "Você ainda nâo se conectou!";
    }
        
    if(!isset($_SESSION['erro']) && $_SESSION["erro"] !=""){
        echo $_SESSION["erro"] . "<br>";
    }
    if(!isset($_SESSION['logado'])){
        echo "<br>".$_SESSION['erro'];
    }
    ?>
    <form class="box" action="pg_principal.php" method="post" onsubmit="return validarlogin();">
        <h1>Login</h1>
        <input type="text" id="login" name="usuario" placeholder="Username" required>
        <input type="password" name="senha" placeholder="Password">
        <input href="index.php" type="submit" name="enviar" value="enviar" required>
        <p>/A senha é projeto!/</p>
    </form>
    
</body>
</html>
