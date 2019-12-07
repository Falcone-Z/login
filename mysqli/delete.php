<?php
require 'connect.php';

$sql = " DELETE FROM `user` WHERE `id` = 6 ";
if(mysqli_query($conn,$sql))
{
    echo 'delete successfully '.mysqli_affected_rows($conn).' persons';
}
else
{
    echo 'false'.mysqli_error($conn);
}

mysqli_close($conn);
