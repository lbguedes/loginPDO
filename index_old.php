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
        <h1>Login - Testes de criptografia</h1>
        <h2>Criptografias mais conhecidas: MD5 e Sha1</h2>
        <h3>Mas vamos ver outras como: sha256, sha512, base64</h3>
        <h4>Form. Cadastro de Usuário</h4>
        <form method="POST">
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
        if (isset($_POST['salvar'])) {
            echo "<br>.: Dados do formulário :.";
            echo "<br> Nome: " . $_POST['nome'];
            echo "<br> E-mail: " . $_POST['email'];
            echo "<br> Senha: " . $_POST['pas'];
            $pas = $_POST['pas'];
            $criptoMD5 = md5($pas);
            $criptoSha1 = sha1($pas);
            $criptoSha2 = hash('sha256', $pas);
            $criptoSha3 = hash('sha512', $pas);
            $criptoBase64 = base64_encode($pas);
            $criptoPassword_Hash = password_hash($pas, PASSWORD_DEFAULT);
            //Teste da palavra adm (pesBD)
            $pasBD = '$2y$10$j.TdRVi0pZnBakiqV2bfUOIWXChAro.zz5PjlTc5sP5FVQlXgeV1y';
            echo "<br><br>.: Padrões de encriptação :.";
            echo "<br> MD5: " . $criptoMD5;
            echo "<br> Sha1: " . $criptoSha1;
            echo "<br> Sha2: " . $criptoSha2;
            echo "<br> Sha3: " . $criptoSha3;
            echo "<br> Base64: " . $criptoBase64;
            echo "<br> Password_Hash: " . $criptoPassword_Hash;
            if (password_verify($pas, $pasBD)) {
                echo"<br> Senha Válida!";
            } else {
                echo "<br> Senha Inválida!";
            }
        }
        ?>
    </body>
</html>
