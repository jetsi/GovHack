<?php

$db_con = mysqli_connect('localhost','root','','govhack');
if (!$db_con) {
    die('Could not connect: ' . mysql_error());
}

mysqli_close($db_con);

?>