<?php

setCookie('id',"");
setCookie('acceso',"");
session_unset();
session_destroy();
print"<meta http-equiv='refresh' content='0; url=index.php'>";
?>