<?php

// conexão com banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "personalidades";

$mysqli = new mysqli($host, $usuario, $senha, $bd); 

if ($mysqli -> connect_errno)
    echo "Falha na conexão: (".$mysqli -> connect_errno.") ".$mysqli -> connect_errno;
    
