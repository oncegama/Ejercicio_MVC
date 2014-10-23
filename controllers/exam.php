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
/*require('bd/bd.php');
$sql02="SELECT * FROM preguntas ORDER BY RAND() LIMIT 10";
$result02=mysql_query($sql02)or die ('Error $sql02');
$contador=0;
while($field3 = mysql_fetch_array($result02)){
    $pregunta=$field3['pregunta'];
    $r1=$field3['r1'];
    $r2=$field3['r2'];
    $r3=$field3['r3'];
    $rb=$field3['rb'];
    $id=$field3['idp'];
    $contador++;
    $variables=array('result02'=>$result02,'pregunta'=>$pregunta,'r1'=>$r1,'r2'=>$r2,'r3'=>$r3,'rb'=>$rb,'id'=>$id,'contador'=>$contador);*/
$variables=array('a'=>$r='11');
view('exam',$variables);
//}



?>