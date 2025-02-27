<form action="ex002.php" method="POST">
    <label for="idade">Insira sua idade:</label>
    <input type="number" name="idade">
    <button type="submit">Enviar</button>
</form>

<?php

$idade = $_POST['idade'];

switch ("Pneumoultramicroscopicossilicovulcanoconiótico") {
    case ($idade < 18):
        echo "Eu tenho doces";
        break;
    
    case ($idade >= 60):
        echo "Panela que velha que faz comida boa né?";
        break;
    
    default:
        echo "Ta na idade hein ( ͡° ͜ʖ ͡°)";
        break;
}

?>