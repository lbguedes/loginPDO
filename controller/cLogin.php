<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of cLogin
 *
 * @author laura
 */
class cLogin {
    //put your code here
    
    public function logar(){
        if(isset($_POST['logar'])){
            $email = $_POST['email'];
            $pas = $_POST['pas'];
            
            var_dump($_POST);
        }
    }
}
