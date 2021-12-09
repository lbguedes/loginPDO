<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    
    $pdo = require_once '../PDO/connection.php';
    $sql = "update usuario set nomeUser = ? where idUser = ?";
    $sth = $pdo->prepare($sql);
    $sth->bindParam(1, $nome, PDO::PARAM_STR);
    $sth->bindParam(2, $id, PDO::PARAM_INT);
    $sth->execute();
    unset($sth);
    unset($pdo);
    header("location: ../view/listaUsuario.php");
    
}