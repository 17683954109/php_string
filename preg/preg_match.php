<?php

// preg_match 函数

$str = <<<EOT
dsdad127.0.0.1dfsdadads
sdef125.116.52.3sdsds
48554dsad45848dsd4saa8
EOT;
$reg = '/([0-9]{1,3}\.{1}){3}[0-9]{1}/m';
$res = preg_match($reg,$str);
var_dump(boolval($res));    //  bool(true)  -> 匹配的结果
$res = preg_match($reg,$str,$arr);
var_dump($arr);
/*
 *
 array(2) {
  [0] =>
  string(9) "127.0.0.1"   -> 匹配到的字符
  [1] =>
  string(2) "0."    -> 子表达式匹配到的字符: 由于是使用了量词，所以只返回最后一次的,完整的应该为 ：127.0.0.
}
 * */
