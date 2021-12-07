<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of cUsuario
 *
 * @author laura
 */
class cUsuario {

    //put your code here

    public function inserir() {
        if (isset($_POST['salvar'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $pas = $_POST['pas'];

            $pdo = require_once '../PDO/connection.php';
            $sql = "insert into usuario (nomeUser, email, pas) values (?,?,?)";
            $sth = $pdo->prepare($sql);
            $sth->bindParam(1, $nome, PDO::PARAM_STR);
            $sth->bindParam(2, $email, PDO::PARAM_STR);
            $sth->bindParam(3, $pas, PDO::PARAM_STR);
            $pas = password_hash($pas, PASSWORD_DEFAULT);
            $sth->execute();
            unset($sth);
            unset($pdo);
        }
    }

    public function getUsuario() {
        $pdo = require_once '../PDO/connection.php';
        $sql = "select idUser, nomeUser, email from usuario";
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        unset($sth);
        unset($pdo);
        return $result;
    }
    
  
}
