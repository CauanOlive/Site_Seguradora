<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index da Página</title>
        <link rel="stylesheet" href="Index_style.css">
    </head>
    <body>
        <div class="container">
        
            <?php
                session_start();
				if(!isset($_SESSION['logado'])){
                    echo "Você ainda nâo se conectou!";
                }
                    
                if(!isset($_SESSION['erro']) && $_SESSION["erro"] !=""){
                    echo $_SESSION["erro"] . "<br>";
                }
              
            ?>

        <form method="post" action="pg_principal.php" id="login">
        <label> Login</label>
            <br>
            Usuario:
            <input type="text" name="usuario">
            <br>
            Senha:
            <input type="password" name="senha">
            <br>
            <input type="submit" value="Enviar">
        </form>

    </div>
    </body>
</html>