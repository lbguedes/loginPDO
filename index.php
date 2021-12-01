<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        $pdo = require_once './PDO/connection.php';
        $pas = password_hash('admin123', PASSWORD_DEFAULT);
        $sql = "insert into usuario (nomeUser,email,pas) values(?,?,?)";
        
        $statement = $pdo->prepare($sql);
        $statement->execute(['Luigi','luigis@gmail.com',$pas]);
        
        foreach ($pdo->query('select * from usuario') as $row){
            print_r($row);
        }
        ?>
    </body>
</html>
