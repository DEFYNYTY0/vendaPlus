<?php
session_start();

if(!isset($_SESSION['cpf']) or !isset($_SESSION['senha']));{

session_destroy();

unset($_SESSION['cpf']);
unset($_SESSION['senha']);

header('location: index.php');

} ;
?>