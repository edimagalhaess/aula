<?php
mysql_connect('localhost','root','') or die('ocorreu um erro ao conectar com o banco de dados');
mysql_select_db('aulaphp') or die('ocorreu um erro ao selecionar banco de dados');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];

$sql = "INSERT INTO `formulario`(`NOME`, `ENDERECO`, `NUMERO`, `BAIRRO`) VALUES ('$nome','$endereco','$numero','$bairro')";
mysql_query($sql) or die($sql);

?>