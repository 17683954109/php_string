<?php

// preg_match_all 函数 : 对字符串匹配所有

$str = <<<EOT
dsdad127.0.0.1dfsdadads
sdef125.116.52.3sdsds
48554dsad45848dsd4saa8
EOT;
$reg = '/([0-9]{1,3}\.{1}){3}[0-9]{1}/';
$res = preg_match_all($reg,$str,$arr);  // $arr 为匹配结果
var_dump($arr);
/*
    * array(2) {
    *  [0] =>
    *  array(2) {
    *    [0] =>
    *    string(9) "127.0.0.1"  -> 完整匹配到的数据
    *    [1] =>
    *    string(12) "125.116.52.3"
    *  }
    *  [1] =>
    *  array(2) {
    *    [0] =>
    *    string(2) "0."  -> 子表达式的匹配到的数据: 由于是使用了量词，所以只返回最后一次的,完整的应该为 ：127.0.0.
    *    [1] =>
    *    string(3) "52."
    *  }
    * }
 */

