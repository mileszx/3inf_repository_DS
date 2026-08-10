<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #3377b8, #093b6e);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: black;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        }
    </style>
</head>

<?php
 $nome = $_REQUEST["nome"];
 $email = $_REQUEST["email"];
 $telefone = $_REQUEST["telefone"];
 $CPF = $_REQUEST["CPF"];


$valueName = "/^[a-zA-Z]+(\s[a-zA-Z]+)+$/";
$valueEmail = "/^[a-zA-Z0-9]+@[a-z]+.([a-z]+)+$/";
$valueTelefone = "/^([0-9\s\-\+\(\)]*$";
$valueCPF = "/^([0-9\s\-\+\(\)]*$/";

if (preg_match($valueName, $nome)) {
    echo "<p><h1>voce se cadastrou com sucesso!<h/></p>";
}else{
    echo "<p><h1>Erro, falta de informação</h1> </p>";
};
