<?php
// Iniciando as variaveis sessions.
session_start();

// Aqui as variaveis  estão recebendo os valores do formulario

$_POST['nome'] = $nome;

$_POST['idade'] = $idade;

$_POST['modelo'] = $modelo;

$_POST['ano-carro'] = $ano_carro;

$_POST['valor-carro'] = $valor_carro;

// O usuario irá escolher os tipos de seguros que tem.

// O plano basico, com o menor valor, e menos beneficios 
//para o cliente.
$_POST['basico'] = $basico;

// O avançado ja será incluido mais coisas, e  seu preço
//vai ser superior também.
$_POST['avançado'] = $avancado;

// O completo terá todos os beneficios da seguradora.
$_POST['completo'] = $completo;


/*A partir deste ponto iremos calcular todos os dados
do cliente, e lhe entregar o valor final do seguro.*/

/* Estou atribuindo o valor de 0,5% da variável valor-carro
para a variável basico. Este será o valor inicial do seguro. */

$basico = $valor_carro * 0.005;

/* Aqui iniciamos uma estrutura de codígo atraves do if,
 para identificar qual a idade do cliente, e depois 
 calcular o acrescimo que será cobrado de acordo com 
 a idade do mesmo.*/

// vou utilizar uma variavel temporaria para armazenar o valor
//obtido.
$temp = 0;

//caso o usuario não tenha completado 18 anos.
if($idade<18){
    echo "Complete 18 anos.";
}

//caso a idade esteja entre 18 e 25.
if ($idade>=18 && $idade<=25){
    $temp = $basico + ($basico * 0.17);
    $basico = $temp;
}

//caso a idade esteja entre 25 e 35.
if ($idade>=25 && $idade<=35){
    $temp = $basico + ($basico * 0.13);
    $basico = $temp;
}

//caso a idade esteja entre 35 e 45.
if($idade>=35 && $idade<=45){
    $temp = $basico + ($basico * 0.09);
    $basico = $temp;
}

//caso a idade esteja entre 45 e 60.
if($idade>=45 && $idade<=60){
    $temp = $basico + ($basico * 0.05);
    $basico = $temp;
}

//caso a idade seja maior do que 60.
if($idade>60){
    $temp = $basico + ($basico * 0.02);
    $basico = $temp;
}

/* Agora vou calcular o plano avançado.*/

$temp = 0;

/* Estou atribuindo 0,9% do valor total do carro
ao plano avançado.*/
$avancado = $valor_carro * 0.009;

//caso a idade do usuario nao seja maior que 18 anos.
if($idade<18){
    echo "Complete 18 anos.";
}

//caso a idade esteja entre 18 e 25.
if($idade>=18 && $idade<=25){
    $temp = $avancado + ($avancado * 0.17);
    $avancado = $temp;
}

//caso a idade esteja entre 25 e 35.
if($idade>=25 && $idade<=35){
    $temp = $avancado + ($avancado * 0.13);
    $avancado = $temp;
}

//caso a idade esteja entre 35 e 45.
if($idade>=35 && $idade<=45){
    $temp = $avancado + ($avancado * 0.09);
    $avancado = $temp;
}

//caso a idade esteja entre 45 e 60.
if($idade>=45 && $idade<=60){
    $temp = $avancado + ($avancado * 0.05);
    $avancado = $temp;
}

//caso a idade seja maior que 60.
if($idade>60){
    $temp = $avancado + ($avancado * 0.02);
    $avancado = $temp;
}


/* Agora vou calcular o plano completo.*/

$temp = 0;

/* Estou atribuindo 0,9% do valor total do carro
ao plano avançado.*/
$completo = $valor_carro * 0.012;

//caso a idade do usuario nao seja maior que 18 anos.
if($idade<18){
    echo "Complete 18 anos.";
}

//caso a idade esteja entre 18 e 25.
if($idade>=18 && $idade<=25){
    $temp = $completo + ($completo * 0.17);
    $completo = $temp;
}

//caso a idade esteja entre 25 e 35.
if($idade>=25 && $idade<=35){
    $temp = $completo + ($completo * 0.13);
    $completo = $temp;
}

//caso a idade esteja entre 35 e 45.
if($idade>=35 && $idade<=45){
    $temp = $completo + ($completo * 0.09);
    $completo = $temp;
}

//caso a idade esteja entre 45 e 60.
if($idade>=45 && $idade<=60){
    $temp = $completo + ($completo * 0.05);
    $completo = $temp;
}

//caso a idade seja maior que 60.
if($idade>60){
    $temp = $completo + ($completo * 0.02);
    $completo = $temp;
}


?>
