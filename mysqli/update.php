<?php
require 'connect.php';

$sql = "UPDATE `user` SET `name` = 'joker', `password` = '000000' WHERE `id` = 1";
if(mysqli_query($conn,$sql))
{
    echo 'update successfully '.mysqli_affected_rows($conn).' persons';
}
else
{
    echo 'false'.mysqli_error($conn);
}

mysqli_close($conn);