<?php

require 'connect.php';

$sql = "SELECT `id`,`name`,`password` FROM `user` WHERE `id`>=1 ";

$result = mysqli_query($conn,$sql);

echo '<br>';
if($result && mysqli_num_rows($result) > 0 )
{
    //返回当前字段的索引
    echo mysqli_field_tell($result);
    $field = mysqli_fetch_field($result);
    echo '<pre>';
    print_r($field);

    //输出当前字段，即id
    echo '<hr>';
    echo $field -> name;


    echo '<hr>';
     //返回下一字段的索引
    echo mysqli_field_tell($result);
}


//指针复位
mysqli_field_seek($result,0);

//用循环遍历字段信息
    echo '<hr><hr><hr>';
if($result && mysqli_num_rows($result) > 0 )
{
    while($field = mysqli_fetch_field($result))
    {
        echo '<pre>';
        //输出当前字段，即id
        echo '<hr>';
        echo $field -> name;
        echo '<hr>';
        print_r($field);
        //返回下一字段的索引
        echo mysqli_field_tell($result);
    }
}


//释放结果集
mysqli_free_result($result);

//关闭数据库
mysqli_close($conn);