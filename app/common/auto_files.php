<?php 
// require('../config/function.php'); // 引入自定义函数
include('../config/const.php'); // 引入常量文件

foreach($const as $k => $v){ // 分配常量
    define($k,$v);
}

 ?>