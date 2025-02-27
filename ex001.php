<form action="ex001.php" method="POST">
    <h1>Some dois números!</h1>
    <label for="n1">Insira o primeiro número:</label>
    <input type="number" name="n1">
    <br>
    <label for="n2">Insira o segundo número:</label>
    <input type="number" name="n2">
    <br>
    <button type="submit">Enviar</button>
</form>

<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$res = $n1 + $n2;
echo  "A soma dos números $n1 + $n2 é igual a $res<br><br>";
echo "Área Nerds:";
echo "<pre>";
var_dump($res);
echo "</pre>";

?>