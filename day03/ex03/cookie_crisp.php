<?php
if ($_GET["action"] == "set")
    setcookie($_GET['name'], $_GET['value'], time()+60);
if ($_GET['action'] == 'get')
    echo $_COOKIE['name'];
if ($_GET['action'] == 'del')
    setcookie($_GET['name'], null, time()-60);
?>