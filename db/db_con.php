<?php

$db_con = mysqli_connect('localhost','root','','govhack');
if (!$db_con) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully to database!';
mysqli_close($db_con);

?>