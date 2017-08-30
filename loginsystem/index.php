<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CADASTRAR</title>
    </head>
    <body>
        <div id="container">
            <h4>CADASTRAR</h4>
            <form action ="cadastrar.php" method="POST">
                <label>Login: </label><input type="text" name ="login" id="login"><br>
                <label>Senha: </label><input type="password" name="senha" id="senha"><br>
                <input type="submit" name="enviar" value="enviar">                
            </form>
            <a href="login.html">login</a>
        </div>
    </body>
</html>
