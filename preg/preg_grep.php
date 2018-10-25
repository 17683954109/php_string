<?php

// preg_grep 函数 : 对数组中的元素进行正则过滤

$arr = array('2','a','s','5');
$res = preg_grep('/\d/',$arr); // 返回 arr 中符合正则规则的数组元素(array)
var_dump($res);
/*
 * array(2) {
  [0] =>
  string(1) "2"
  [3] =>
  string(1) "5"
 }
 * */

// 第三个参数为反向取值 PREG_GREP_INVERT 填入则返回不匹配的元素

var_dump(preg_last_error());  // 捕获 preg 系列函数最后一次出现的错误,没有参数,大部分情况下返回值为0
//返回值为 PREG_NO_ERROR 时表示没有出现错误，其他返回值请自行理解
