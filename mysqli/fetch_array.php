<?php
//连接数据库
require 'connect.php';

//创建选择条件
$sql = "SELECT `id`,`name`,`password` FROM `user` WHERE `id`>=1 ";


$result = mysqli_query($conn,$sql);
echo 'number = '.mysqli_num_rows($result);
echo '<br>';
if($result && mysqli_num_rows($result) > 0 )
{
    $row = mysqli_fetch_array($result);
    echo '<pre>';
    print_r($row);
}

//复位结果集指针
mysqli_data_seek($result,0);

echo '<hr>';

//遍历结果集
if($result && mysqli_num_rows($result) > 0 )
{
    while($row = mysqli_fetch_array($result))
    {
        echo '<pre>';
        print_r($row);
        echo '<hr>';
    }
}

mysqli_data_seek($result,0);
//将结果集一次性解析到二维数组中
echo '二维数组：' ;
echo '<br>';
$rows = [];
if($result && mysqli_num_rows($result) > 0 )
{
    while($row = mysqli_fetch_array($result))
    {
        $rows[] = $row;
    }
}
//输出二维数组
echo '<pre>';
print_r($rows);

//释放结果集
mysqli_free_result($result);

//关闭数据库
mysqli_close($conn);
