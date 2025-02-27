<form action="ex001.php" method="POST">
    <h1>Operações Aritméticas com dois números!</h1>
    <label for="n1">Insira o primeiro número:</label>
    <input type="number" name="n1" required>
    <br>
    <label for="n2">Insira o segundo número:</label>
    <input type="number" name="n2" required>
    <br>
    <label for="operation">Escolha a operação:</label>
    <select name="operation">
        <option value="add">Soma</option>
        <option value="subtract">Subtração</option>
        <option value="multiply">Multiplicação</option>
        <option value="divide">Divisão</option>
        <option value="modulus">Módulo</option>
    </select>
    <br>
    <button type="submit">Calcular</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operation = $_POST['operation'];
    $res = 0;
    $operation_name = "";

    switch ($operation) {
        case 'add':
            $res = $n1 + $n2;
            $operation_name = "Soma";
            break;
        case 'subtract':
            $res = $n1 - $n2;
            $operation_name = "Subtração";
            break;
        case 'multiply':
            $res = $n1 * $n2;
            $operation_name = "Multiplicação";
            break;
        case 'divide':
            if ($n2 != 0) {
                $res = $n1 / $n2;
                $operation_name = "Divisão";
            } else {
                echo "Erro: Divisão por zero não permitida.";
                exit();
            }
            break;
        case 'modulus':
            if ($n2 != 0) {
                $res = $n1 % $n2;
                $operation_name = "Módulo";
            } else {
                echo "Erro: Módulo por zero não permitida.";
                exit();
            }
            break;
        default:
            echo "Operação inválida.";
            exit();
    }

    echo "A operação de $operation_name entre $n1 e $n2 resulta em: $res<br><br>";
    echo "Área Nerds:";
    echo "<pre>";
    var_dump($res);
    echo "</pre>";
}

?>
