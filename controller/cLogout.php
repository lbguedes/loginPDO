<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//Inicializa a sessão
session_start ();

//Renova todas as variaveis da sessão
$_SESSION = array ();

//Destroi a sessão
session_destroy ();

//Redirecionar para tela de login após logou
header("Location: ../view/login.php");
exit;