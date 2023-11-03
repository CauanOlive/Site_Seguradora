<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $idade = (int)$_POST["idade"];
    $modelo = $_POST["modelo"];
    $ano_carro = (int)$_POST["ano-carro"];
    $valor_carro = (float)$_POST["valor-carro"];
    $tipo = "completo";

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

        echo "O seguro do carro é de R$$seguro";
    }
}
?>
