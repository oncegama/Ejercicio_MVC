<!--html>
<head></head>
<body>
<form action='calif' method='POST'  enctype='multipart/form-data'>
<p align='center'><?=$pregunta ?></p>
<table class=table table-stripped>
    <? echo  "<tr><td align='center'><input type='radio' name='respuesta$contador' id='1' value='r1'>". $r1 ?></td></tr>
    <? echo  "<tr><td align='center'><input type='radio' name='respuesta$contador' id='2' value='r2'>". $r2 ?></td></tr>
    <? echo  "<tr><td align='center'><input type='radio' name='respuesta$contador' id='3' value='r3'>". $r3 ?></td></tr>
    <? echo  "<tr><td align='center'><input type='text' name='contador' id='4' value='$contador'>" ?></input></td></tr>
    <? echo  "<tr><td align='center'><input type='text' name='rb$contador' id='5' value='$rb'>" ?></input></td></tr>
    <? echo  "<tr><td align='center'><input type='text' name='id$contador' id='6' value='$id'>" ?></input></td></tr>
</table>
</body>
</html-->
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
$sql02="SELECT * FROM preguntas ORDER BY RAND() LIMIT 10";
$result02=mysql_query($sql02)or die ('Error $sql02');
$contador=0;

while($field3 = mysql_fetch_array($result02)){
    echo"<table class=table table-stripped>";
    $pregunta=$field3['pregunta'];
    $r1=$field3['r1'];
    $r2=$field3['r2'];
    $r3=$field3['r3'];
    $rb=$field3['rb'];
    $id=$field3['idp'];
    $contador++;
    echo"<form action='calif' method='POST'  enctype='multipart/form-data'>";
    echo"<p align='center'>$contador) $pregunta </p>";
    echo "<tr><td align='center'><input type='radio' name='respuesta$contador' id='1' value='r1' required=''> $r1 </td></tr>";
    echo "<tr><td align='center'><input type='radio' name='respuesta$contador' id='2' value='r2' required=''> $r2 </td></tr>";
    echo "<tr><td align='center'><input type='radio' name='respuesta$contador' id='3' value='r3' required=''> $r3 </td></tr>";
    echo "<tr><td align='center'><input type='text' name='contador$contador' id='4' value='$contador'></input></td></tr>";
    echo "<tr><td align='center'><input type='text' name='rb$contador' id='5' value='$rb'></input></td></tr>";
    echo "<tr><td align='center'><input type='text' name='id$contador' id='6' value='$id'></input></td></tr>";
echo"</table>";
}
echo "<center><input  type='submit' name=evaluar id=evaluar value='Evaluar'></input></center></form>"
?>