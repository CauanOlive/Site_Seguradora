<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $idade = (int)$_POST["idade"];
    $modelo = $_POST["modelo"];
    $ano_carro = (int)$_POST["ano-carro"];
    $valor_carro = (float)$_POST["valor-carro"];
    $tipo = $_POST["tipo"];

    $temp = 0;
    $seguro = 0;

    if ($idade < 18) {
        echo "Complete 18 anos.";
    } else {
        if ($tipo === "basico") {
            $temp = $valor_carro * 0.005;
        } elseif ($tipo === "avancado") {
            $temp = $valor_carro * 0.009;
        } elseif ($tipo === "completo") {
            $temp = $valor_carro * 0.012;
        }

        if ($idade >= 18 && $idade <= 25) {
            $temp += $temp * 0.17;
        } elseif ($idade > 25 && $idade <= 35) {
            $temp += $temp * 0.13;
        } elseif ($idade > 35 && $idade <= 45) {
            $temp += $temp * 0.09;
        } elseif ($idade > 45 && $idade <= 60) {
            $temp += $temp * 0.05;
        } elseif ($idade > 60) {
            $temp += $temp * 0.02;
        }

        if ($ano_carro < 2025 && $ano_carro > 2022) {
            $seguro = $temp + ($temp * 0.16);
        } elseif ($ano_carro < 2023 && $ano_carro >= 2018) {
            $seguro = $temp + ($temp * 0.12);
        } elseif ($ano_carro < 2018 && $ano_carro >= 2012) {
            $seguro = $temp + ($temp * 0.08);
        } elseif ($ano_carro < 2012 && $ano_carro >= 2000) {
            $seguro = $temp + ($temp * 0.04);
        } elseif ($ano_carro < 2000) {
            $seguro = $temp + ($temp * 0.02);
        }

    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de conclusão do seguro</title>
        <style>

            @import url('https://fonts.googleapis.com/css?family=Poppins:200i,400&display=swap');
            body{
                font-family: 'Poppins', sans-serif;
                margin: 0;
                background-color: rgb(68 10 193);
                padding:30px;
            }

            .control{
                background-color: #c8cccd;
                margin: 7px;
                border: 4px solid #5b5c5d;
                display: block;
                box-shadow: 3px 3px rgb(0, 0, 0);
                padding: 4px;
                font-size: large;
            }
            .result{
                background-color: #c8cccd;
                margin: 7px;
                border: 4px solid #5b5c5d;
                display: block;
                box-shadow: 3px 3px rgb(0, 0, 0);
                padding: 4px;
                font-size: large;
            }

            footer {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px;
            }

            a{
                color: white;
            }

        </style>
    </head>
    <body>

    <div class="control">
        <h1>Obrigado por escolher a nossa seguradora <?php echo $_SESSION["usuario"]?>.</h1> 
        <p>Ficamos muito feliz com a sua escolha, a partir de agora,
            nos cuidaremos  do resto.<br>
            Um mensagem de confirmação será enviada por e-mail, pedimos
            que confirme que é mesmo você.
        </p>
    </div>

    <div class="result">
       
        <h2>Aqui está o seu plano!</h2>
        <p>Você optou pelo plano 
        <?php echo"$tipo"?>, uma ótima escolha.
        </p>

        <h3>O valor do Seguro ficou em:</h3>
        <p>R$<?php echo"$seguro"?> por mês.</p>
    </div>


    
    
    <footer>
        <a href="pg_principal.php">Página Principal</a>   
        <p>&copy; 2023 ProtecSeguro</p>
    </footer>

    </body>
</html>
