<form action="ex010.php" method="POST">
    <label for="nome">Insira seu nome:</label>
    <input type="text" name="nome">
    <label for="idade">Insira sua idade:</label>
    <input type="number" name="idade">
    <button type="submit">Enviar</button>
</form>

<?php

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    echo "Olá, $nome! Você tem $idade anos."

?>