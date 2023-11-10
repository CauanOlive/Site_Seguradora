<?php

    //Este primeiro  código é para ocultar os erros
    //de php na página.
    error_reporting(0);
    ini_set('display_errors', 0);
    session_start();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $msg = $_POST['msg'];

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style_fcontact.css">
        <title>contato</title>
    </head>

    <body>
        
        <div class="msg">
            <h1>Entraremos em contato!</h1><br>

            <p><?php echo $nome;?>, obrigado por nos contactar, em breve retornaremos
            a sua mensagem. <br><br>
        
            Confirme seus dados:</p>
            <br>
        </div>

        <div class="inf">
        <p>Email:  <?php echo $email;?></p>
        <p>Telefone:  <?php echo $telefone;?></p>
        <p>Mensagem:  <?php echo $msg;?></p>

        </div>
        
        
        
        <footer>
            <a href="pg_principal.php">Página principal</a>
        <p>&copy; 2023 ProtecSeguro</p>
        </footer>

    </body>

</html>