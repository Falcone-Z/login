<?php


//连接到数据库
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'login';   //数据库名
$conn = mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno())
{
    die('false'.mysqli_connect_error($conn));
}
else
{
    echo 'connect successfully<br>';
}