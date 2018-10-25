<?php

// preg_grep 函数

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
