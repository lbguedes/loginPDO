<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="../controller/logout.php">Sair</a>
        <h1>Cadastro de Usuários</h1>
        <form action="<?php $cadUser->inserir(); ?>" method="POST">
            <input type="text" name="nome" placeholder="Nome aqui..."/>
            <br>
            <input type="email" name="email" placeholder="E-mail aqui..."/>
            <br> 
            <input type="password" name="pas" placeholder="Senha aqui..."/>
            <br> 
            <input type="submit" name="salvar" value="Salvar"/>
            <input type="reset" name="limpar"  value="Limpar"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
