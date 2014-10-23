<?php
$idu=$_COOKIE['id'];
$acceso=$_COOKIE['acceso'];
if($idu=="" or $acceso=="")
{
    print"<meta http-equiv='refresh' content='0; url=index.php'>";
}
$idu2=$_SESSION['id'];
$acceso2=$_SESSION['acceso'];
if($idu2=="" or $acceso2=="")
{
    print"<meta http-equiv='refresh' content='0; url=index.php'>";
}
require('bd/bd.php');
$caldef=0;
if($calif1==$respuesta1)
{
echo"<div class='alert alert-success' role='alert'>1) La respuesta fue correcta</div>";
    $caldef++;
}
else{
    $sql03="SELECT * FROM preguntas WHERE idp=$id1";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res1=mysql_result($result03,0,$respuesta1);
    $reb1=mysql_result($result03,0,$calif1);
echo"<div class='alert alert-danger' role='alert'>1) Tu respuesta fue $res1 y la respuesta correcta era $reb1</div>";
}
if($calif2==$respuesta2)
{
    echo"<div class='alert alert-success' role='alert'>2) La respuesta fue correcta</div>";
    $caldef++;
}
else{
    $sql03="SELECT * FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res2=mysql_result($result03,0,$respuesta2);
    $reb2=mysql_result($result03,0,$calif2);
    echo"<div class='alert alert-danger' role='alert'>2) Tu respuesta fue $res2 y la respuesta correcta era $reb2</div>";
}
if($calif3==$respuesta3)
{
    echo"<div class='alert alert-success' role='alert'>3) La respuesta fue correcta</div>";
    $caldef++;
}
else{
    $sql03="SELECT * FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res3=mysql_result($result03,0,$respuesta3);
    $reb3=mysql_result($result03,0,$calif3);
    echo"<div class='alert alert-danger' role='alert'>3) Tu respuesta fue $res3 y la respuesta correcta era $reb3</div>";
}
if($calif4==$respuesta4)
{
    echo"<div class='alert alert-success' role='alert'>4) La respuesta fue correcta</div>";
    $caldef++;
}
else{
    $sql03="SELECT * FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res4=mysql_result($result03,0,$respuesta4);
    $reb4=mysql_result($result03,0,$calif4);
    echo"<div class='alert alert-danger' role='alert'>4) Tu respuesta fue $res4 y la respuesta correcta era $reb4</div>";
}
if($calif3==$respuesta5)
{
    echo"<div class='alert alert-success' role='alert'>5) La respuesta fue correcta</div>";
    $caldef++;
}
else{
    $sql03="SELECT * FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res5=mysql_result($result03,0,$respuesta5);
    $reb5=mysql_result($result03,0,$calif5);
    echo"<div class='alert alert-danger' role='alert'>5) Tu respuesta fue $res5 y la respuesta correcta era $reb5</div>";
}
if($calif6==$respuesta6)
{
    echo"<div class='alert alert-success' role='alert'>6) La respuesta fue correcta</div>";
    $caldef++;
}
else{
    $sql03="SELECT * FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res6=mysql_result($result03,0,$respuesta6);
    $reb6=mysql_result($result03,0,$calif6);
    echo"<div class='alert alert-danger' role='alert'>6) Tu respuesta fue $res6 y la respuesta correcta era $reb6</div>";
}
if($calif7==$respuesta7)
{
    echo"<div class='alert alert-success' role='alert'>7) La respuesta fue correcta</div>";
    $caldef++;
}
else{
    $sql03="SELECT * FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res7=mysql_result($result03,0,$respuesta7);
    $reb7=mysql_result($result03,0,$calif7);
    echo"<div class='alert alert-danger' role='alert'>7) Tu respuesta fue $res7 y la respuesta correcta era $reb7</div>";
}
if($calif8==$respuesta8)
{
    echo"<div class='alert alert-success' role='alert'>8) La respuesta fue correcta</div>";
    $caldef++;
}
else{
    $sql03="SELECT * FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res8=mysql_result($result03,0,$respuesta8);
    $reb8=mysql_result($result03,0,$calif8);
    echo"<div class='alert alert-danger' role='alert'>8) Tu respuesta fue $res8 y la respuesta correcta era $reb8</div>";
}
if($calif9==$respuesta9)
{
    echo"<div class='alert alert-success' role='alert'>9) La respuesta fue correcta</div>";
    $caldef++;
}
else{
    $sql03="SELECT * FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res9=mysql_result($result03,0,$respuesta9);
    $reb9=mysql_result($result03,0,$calif9);
    echo"<div class='alert alert-danger' role='alert'>9) Tu respuesta fue $res9 y la respuesta correcta era $reb9</div>";
}
if($calif10==$respuesta10)
{
    echo"<div class='alert alert-success' role='alert'>3) La respuesta fue correcta</div>";
    $caldef++;
}
else{
    $sql03="SELECT * FROM preguntas WHERE idp=$id2";
    $result03=mysql_query($sql03)or die ('Error $sql03');
    $res10=mysql_result($result03,0,$respuesta10);
    $reb10=mysql_result($result03,0,$calif10);
    echo"<div class='alert alert-danger' role='alert'>10) Tu respuesta fue $res10 y la respuesta correcta era $reb10</div>";
}
if($caldef>=8){
    echo"<div class='alert alert-info' role='alert'>Tu calificación es $caldef</div>";
}
else{
    echo"<div class='alert alert-danger' role='alert'>Tu calificación es $caldef</div>";
}
$sql03="SELECT * FROM users WHERE id=$idu";
$result03=mysql_query($sql03)or die ('Error $sql03');
$calbd=mysql_result($result03,0,'calif');
if($caldef>$calbd)
{
    $sql03="UPDATE users SET calif=$caldef WHERE id='$idu'";
    $result03=mysql_query($sql03)or die ('Error $sql03');
}
$sql04="SELECT * FROM users WHERE id=$idu";
$result04=mysql_query($sql04)or die ('Error $sql04');
$calbd2=mysql_result($result04,0,'calif');
echo"<div class='alert alert-info' role='alert'>Tu calificación más alta es $calbd2</div>";
?>