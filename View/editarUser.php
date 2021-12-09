<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
session_start();
if (!isset($_SESSION['logado']) && $_SESSION['logado'] != true) {
    header("Location: login.php");
} else {
    echo $_SESSION['usuario'] . " | " . $_SESSION['email'];
    echo " | <a href='../controller/cLogout.php'>Sair</a>";
}
$id = null;
if(isset($_POST['editar'])){
    $id = $_POST['idUser'];
}
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
$user = $cadUser->getUsuarioById($id);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Editar Usuário</h1>
        <form action="../controller/updateUser.php" method="POST">
            <input type="hidden" name="id" valeu="<?php echo $user[0] ['idUser']; ?>"/>
            <input type="text" name="nome" valeu="<?php echo $user[0] ['nomeUser']; ?>"/>
            <br>
            <input type="email" name="email" disable valeu="<?php echo $user[0] ['email']; ?>"/>
            <br> 
            <input type="submit" name="update" value="Salvar"/>
            <input type="button" value="Cancelar" onclick="location.href='listaUsuario.php'"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
