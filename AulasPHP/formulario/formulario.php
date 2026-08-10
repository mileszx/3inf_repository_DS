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
            border-color: #007bff;
            outline: none;
        }

        form input[type=submit]{
            background: #5a9be1;
        }
    </style>
</head>

<body>

<?php
// Variáveis para mensagem de erro e dados do formulário
$name = $email = $gender = $comment = $website = "";
$nameError = $emailError = $genderError = $websiteError = "";

// Condicional para avaliar se os campos estão preenchidos.
// Se não tiverem, imprime na tela uma mensagem de erro.
// Se tiver preenchido, continua a verificação.
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
    if (empty($_POST["website"])){
        $website = "";
    }else{
        $website = verificar_entrada($_POST["website"]);
    }
    if (empty($_POST["comment"])){
        $comment = "";
    }else{
        $comment = verificar_entrada($_POST["comment"]);
    }
    if (empty($_POST["gender"])){
        $genderError = "O gênero é obrigatório.";
    }else{
        $gender = verificar_entrada($_POST["gender"]);
    }
}else ($_SERVER["REQUEST_METHOD"] == "GET"); {

}

// Retira espaços em branco, contra barras e caracteres especiais
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


    <h1>Formulário</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <!--    ($_SERVER["PHP_SELF"])Super global que retorna o nome do arquivo do script que está sendo executado no momento. Envia o formulário submetido para a mesma página ao invés de pular para uma página diferente.-->
        <!--    O htmlspecialchars()função converte caracteres especiais em entidades HTML. Isso significa que ele irá substituir caracteres HTML como < e > com &lt;e &gt;. Isso impede que os invasores explorem o código injetando código HTML ou Javascript (Ataques de script cruzados) em formulários.-->
        <br>
        Name: <input type="text" name="name">
        <span style = "color:red">* <?php echo $nameError;?></span><br>
        E-mail: <input type="text" name="email">
        <span style = "color: red">* <?php echo $emailError;?></span><br>
        Website: <input type="text" name="website"><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
        Gender:
        <input type="radio" name="gender" value="female">Feminino
        <input type="radio" name="gender" value="male">Masculino
        <input type="radio" name="gender" value="other">Outro
        <span style = "color: red">* <?php echo $genderError;?></span><br>

        <input type="submit" name="submit" value="Enviar">
    </form>

</div>

</body>

</html>
