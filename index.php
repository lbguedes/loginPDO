<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php
session_start();
if(!isset($_SESSION['logado']) && $_SESSION['logado'] !=true){
    header("Location: view/login.php");
}else{
    echo $_SESSION['usuario'] . " | " . $_SESSION['email'];
    echo " | <a href='controller/cLogout.php'>Sair</a>";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Página Inicial</h1>
        <br><br>
        <button onclick="location.href='view/cadUsuario.php'">Cadastro de Usuário</button>
    </body>
</html>
