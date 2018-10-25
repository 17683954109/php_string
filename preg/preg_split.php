<?php

// preg_split 函数 : 使用正则匹配的到的结果来分割字符串，组成数组
$str = 'string';
$res = preg_split('/r/',$str);
var_dump($res);
/*
 *
 array(2) {
  [0] =>
  string(2) "st"
  [1] =>
  string(3) "ing"
}
 *
 * */
