<form action="ex009.php" method="POST">
    <label for="email">Insira seu email:</label>
    <input type="text" name="email">
    <button type="submit">Enviar</button>
</form>

<?php

$email = $_POST['email'];

function validarEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "O e-mail '$email' é válido.";
    } else {
        return "O e-mail '$email' não é válido.";
    }
}

echo validarEmail($email);

?>