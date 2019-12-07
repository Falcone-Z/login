<?php
require 'connect.php';
$sql = "INSERT INTO `user` (`name` , `password`,`creat_time`) VALUES ('tony','12455','1207')";
if(mysqli_query($conn,$sql))
{
    echo 'add '.mysqli_affected_rows($conn).' presons, id key'.mysqli_insert_id($conn);
}
else
{
    echo 'false'.mysqli_error($conn);
}

mysqli_close($conn);

