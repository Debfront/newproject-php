<?php

include 'conexao.php';

$frota= $_POST['frota'];
$cliente= $_POST['cliente'];
$notafiscal= $_POST['notafiscal'];
$transportadora= $_POST['transportadora'];
$data= $_POST['data'];

echo $sql= "INSERT INTO `estoque`(`$frota`, `$cliente`, `$notafiscal`, `$transportadora`, `$data`) VALUES ($frota,'$cliente', $notafiscal, '$transportadora', $data)";

$inserir= mysqli_query($conexao, $sql);


?>