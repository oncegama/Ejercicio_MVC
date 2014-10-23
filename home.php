<?php
require('template/head.php');
require('bd/bd.php');
require('clases/sesion.php');
$sesion = new Sesion();
echo"<div class=table-responsive>";
echo"<form name=maestro action='home.php' method=Post enctype=multipart/form-data>";
echo"<table class=table table-stripped>";
echo"<tr><td align='center'>Usuario:</td><td align='center''><input type='text' name='user' id='user'></input></td>";
echo"<tr><td align='center'>Password:</td><td align='center''><input type='password' name='pass' id='pass'></input></td>";
echo"<tr><td align='center' colspan=2><input type='submit' name=login id=login value='Login'></input></td>";
echo"</table></form></div>";

if(isset($_POST['login'])){
    $sesion->validarDatos($_POST['user'],$_POST['pass']);

}


require('template/foot.php');
?>