<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
session_start();
if (!isset($_SESSION['logado']) && $_SESSION['logado']!= true) {
header("Location: login.php");
}else{
echo $_SESSION['usuario'] . " | " . $_SESSION['email'];
echo " | <a href='../controller/cLogout.php'>Sair</a>";
}
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Cadastro de Usuários</h1>
        <form action="<?php $cadUser->inserir(); ?>" method="POST">
        <input type="text" required placeholder="Nome aqui..." name="nome"/>
        <br><br>
        <input type="tel" required placeholder="Telefone aqui..." name="telefone"/>
        <br><br>
        <input type="email" required placeholder="E-mail aqui..." name="email"/>
        <br><br>
        <input type="text" required placeholder="Endereço aqui..." name="endereco"/>
        <br><br>
        <input type="radio" required value="Fisica" name="tpPessoa">Fisíca
        <input type="radio" required value="Juridica" name="tpPessoa">Jurídica
        <br><br>
        <input type="text" placeholder="CPF aqui..." 
               minlength="11" maxlength="11" name="cpf"/>
        <br><br>
        <input type="text" placeholder="RG aqui..." minlength="10" maxlength="10" name="rg"/>
        <br><br>
        <input type="radio" value="F" name="sexo">Feminino
        <input type="radio" value="M" name="sexo">Masculino
        <br><br>
        <input type="number" placeholder="CNPJ aqui..." name="cnpj"/>
        <br><br>
        <input type="text" placeholder="Nome Fantasia aqui..." name="nomeFantasia"/>
        <br><br>
        <input type="text" placeholder="Site aqui..." name="site"/>
        <br><br>
        <input type="submit" value="Salvar" name="salvar">
        <input type="reset" value="Limpar" name="limpar">
        <input type="button" value="voltar" onclick="location.href = '../index.php'"/>
        <input type="button" value="Lista de Usuários" onclick="location.href = 'listaUsuario.php'"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
