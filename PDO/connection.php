<?php
require_once 'config.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of connection
 *
 * @author laura
 */
class connection {
    //put your code here
    public static function getConnection($host, $dbname, $username, $password){
        $dns = "mysql:host=$host;dbname=$dbname;charset=UTF8";
        
        try{
            $options =[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            return new PDO($dns, $username, $password, $options);
        } catch (PDOException $ex) {
               die($ex->getMessage());
        }
    }
}
return connection::getConnection($host, $dbname, $username, $password);
