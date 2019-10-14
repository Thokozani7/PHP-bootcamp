<?php
if($_POST["submit"] == "OK" && $_POST["login"] && $_POST["paswd"])
{
    mkdir("/private/passwd");
}
else
    echo "ERROR\n";

?>