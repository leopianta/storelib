<!doctype html>
<html lang="{{ app()->getLocale() }}">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="<?php echo asset('css/login.css')?>">


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Entrar</title>

</head>


<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first" style="margin-top: 20px;">
            <img src="<?php echo asset('images/logo.png')?>" id="icon" alt="User Icon" />

        </div>
        <br>
        <!-- Login Form -->
        <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="nome de usuário">
            <input type="password" id="password" class="fadeIn third" name="login" placeholder="senha">
            <input type="submit" class="fadeIn fourth" value="Entrar">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Recuperar senha</a>
        </div>

    </div>
</div>
</html>