<?php
    include_once 'include/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            $sql = "SELECT * from users;";
            $results = mysqli_query($conn, $sql);
        ?>
    </body>
</html>

