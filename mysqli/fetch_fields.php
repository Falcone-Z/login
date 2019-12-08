<?php

require 'connect.php';

$sql = "SELECT `id`,`name`,`password` FROM `user` WHERE `id`>=1 ";

$result = mysqli_query($conn,$sql);

echo '<br>';
if($result && mysqli_num_rows($result) > 0 )
{
    //获取当前表的全部字段信息，返回对象数组
    $fields = mysqli_fetch_fields($result);
    echo '<pre>';
    print_r($fields);

    echo '<hr>';
    //获取指定的字段信息
    $field = mysqli_fetch_field_direct($result,0);
    echo $field->name;
}


//释放结果集
mysqli_free_result($result);

//关闭数据库
mysqli_close($conn);

/*
    [name] => id  //字段名
    [orgname] => id //原始名
    [table] => user  //表名
    [orgtable] => user  //原始表名
    [def] =>  //默认值
    [db] => demo //数据库名
    [catalog] => def //标准默认值
    [max_length] => 1 //最大长度
    [length] => 4 //长度
    [decimals] => 0 //小数位
 */