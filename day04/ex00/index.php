<?php
session_start();
if ($_GET['submit'] == "OK")
{
    $_SESSION['login'] = $_GET["login"];
    $_SESSION['passwd'] = $_GET["passwd"];
}
?>

<!DOCTYPE html>
<html>
<body>
<form align= "center">
Login: <input type = "text" name = "login" placeholder= "Username" value = "<?php echo $_SESSION['login'] ?>" >
<br>
<br>
Password: <input type = "text" name = "passwd" placeholder= "Password" value = "<?php echo $_SESSION['passwd'] ?>">
<br>
<br>
<input align = "center" name = "submit" type = "submit" value = "OK">
</form>
</body>
</html