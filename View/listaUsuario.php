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
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
$listaUser = $cadUser->getUsuario();
?>
<html>
    <head>
         <meta charset="UTF-8">
        <meta http-equiv="Content-Language" content="pt-br">
        <title></title>
    </head>
    
    <body>
        <br>
        <button onclick="location.href='cadUsuario.php'" >Voltar</button>
        <h1>Lista de Usuários</h1>
        <table>
            <tr>
                 <th>ID</th><th>Usuário</th><th>e-mail</th><th>Funções</th>
            </tr>
                <?php foreach ($listaUser as $user): ?>
                <tr>
                    <td><?php echo $user['idUser']; ?></td>
                    <td><?php echo $user['nomeUser']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td>
                        <form action="editarUser.php" method="POST">
                            <input type="hidden" value="<?php echo $user['idUser']; ?>" name="idUser"/>
                            <input type="submit" name="editar" value="Editar"/>
                        </form>
                        
                        <?php if($user['email']!=$_SESSION['email']) { ?>
                        <form action="..controller/deleteUser.php" method="POST">
                            <input type="hidden" value="<?php echo $user['idUser']; ?>" name="idUser"/>
                            <input type="submit"  name="deletar" value="Deletar"/>
                        </form>
                        <?php } ?>
                    </td>
                </tr>
                <?php endforeach; ?>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
