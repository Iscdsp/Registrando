<?php

$nome = filter_input(INPUT_POST, 'nNome');
$email = filter_input(INPUT_POST, 'nEmail', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'nTel',);
$dataEvento = filter_input(INPUT_POST, 'nData',);
$msgObs =filter_input(INPUT_POST, 'nObs',);

echo "Nome: $nome <br>";
echo "$email";
echo "$telefone";
echo "$dataEvento";
echo "$msgObs"
?>