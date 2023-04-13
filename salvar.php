<?php

$nome = $_POST["nome"];
$email = $_POST["email"];


echo "$nome - $email";

$arquivo = fopen("estudantes.csv", "a");

fwrite($arquivo, $nome . "\t");
fwrite($arquivo, $email. "\n");



fclose($arquivo);

header("location:index3.php");

?>