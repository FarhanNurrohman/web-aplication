<?php
session_start();
session_unset();
session_destroy();

setcookie('key','',time()-60*60*24);
setcookie('value','',time()-60*60*24);

header("Location: login.php");
exit;
?>