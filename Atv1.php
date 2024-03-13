<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de número</title>
</head>
<body>
    <h1> Verificação de número - Par ou ímpar </h1>
    <form method="post">
        <label for="num">Digite um número:</label>
        <input type="text" id="num" name="num">
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];

        if (!is_numeric($num)) {
            echo "Por favor, digite um número válido.";
        } else {
            if ($num % 2 == 0) {
                echo "O número informado é PAR!";
            } else {
                echo "O número informado é ÍMPAR!";
            }
        }
    }
    ?>
</body>
</html>
