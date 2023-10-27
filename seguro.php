<?php
// Iniciando as variaveis sessions.
session_start();

// Aqui as variaveis  estão recebendo os valores do formulario

$_SESSION['nome'] = $_POST['nome'];

$_SESSION['idade'] = $_POST['idade'];

$_SESSION['modelo'] = $_POST['modelo'];

$_SESSION['ano-carro'] = $_POST['ano-carro'];

$_SESSION['valor-carro'] = $_POST['valor-carro'];

// O usuario irá escolher os tipos de seguros que tem.

// O plano basico, com o menor valor, e menos beneficios 
//para o cliente.
$_SESSION['basico'] = $_POST['basico'];

// O avançado ja será incluido mais coisas, e  seu preço
//vai ser superior também.
$_SESSION['avançado'] = $_POST['avançado'];

// O completo terá todos os beneficios da seguradora.
$_SESSION['completo'] = $_POST['completo'];


/*A partir deste ponto iremos calcular todos os dados
do cliente, e lhe entregar o valor final do seguro.*/

$_POST['basico'] = $_POST['valor-carro'] *0.005;

switch ($_POST['idade']) {

    case $_POST['idade']>=18 && $_POST['idade']<=25:
        
        $temp = $_POST['idade'] + ($_POST['idade'] * 0.17);
        break;
    
    case $_POST['idade']>25 && $_POST['idade']<=35:

        $temp = $_POST['idade'] + ($_POST['idade'] * 0.13);
        break;

    case $_POST['idade']>35 && $_POST['idade']<=45:

        $temp = $_POST['idade'] + ($_POST['idade'] * 0.09);
        break;
}

?>