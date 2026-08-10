<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <div class="logo"><a href="index.html"><img src="img/logo.png" width="400" height="400" alt="Recanto do Café"></a></div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Recanto do café</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #412c16, #412c16);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input:focus {
            border-color: #412c16;
            outline: none;
        }

        form input[type=submit]{
            background: #512f12;
        }
    </style>
</head>

<body>

<?php

$name = $email = $gender = $telefone = $CPF = "";
$nameError = $emailError = $genderError = $websiteError = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "O nome é obrigatório.";
        // se não estiver vazio verifica a função
    }else{
        $name = verificar_entrada($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $emailError = "O e-mail é obrigatório.";
    }else{
        $email = verificar_entrada($_POST["email"]);
    }
    if (empty($_POST["CPF"])){
        $CPF = "";
    }else{
        $CPF = verificar_entrada($_POST["CPF"]);
    }
    if (empty($_POST["telefone"])){
        $telefone = "";
    }else{
        $telefone = verificar_entrada($_POST["telefone"]);
    }
    if (empty($_POST["gender"])){
        $genderError = "O gênero é obrigatório.";
    }else{
        $gender = verificar_entrada($_POST["gender"]);
    }
}else ($_SERVER["REQUEST_METHOD"] == "GET"); {

}

function verificar_entrada($entrada)
{
    $entrada = trim($entrada);
    $entrada = stripslashes($entrada);
    $entrada = htmlspecialchars($entrada);
    $entrada = strtoupper($entrada);
    return $entrada;
}
?>

<div class="form-container">


    <h1>Cadastro:</h1>

    <form action="saídaForms.php" method="post">
        <br>
        Name: <input type="text" name="name">
        <span style = "color:red">* <?php echo $nameError;?></span><br>
        E-mail: <input type="text" name="email">
        <span style = "color: red">* <?php echo $emailError;?></span><br>
        CPF: <input type="number" name="CPF"><br>
        telefone: <input type="text" name="telefone"><br>
        Gender:
        <input type="radio" name="gender" value="female">Feminino
        <input type="radio" name="gender" value="male">Masculino
        <input type="radio" name="gender" value="other">Outro
        <span style = "color: red">* <?php echo $genderError;?></span><br>

        <input type="submit" name="submit" value="Enviar"><a href="saídaForms.php"
    </form>

</div>

</body>

</html>

