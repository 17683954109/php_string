<?php

// preg_quote 函数 : 对字符串中的正则符号进行转义

$str = '\sdsdsdsdssssss-';
var_dump(preg_quote($str));  // 返回转义后的正则字符串

// string(16) "\\sdsdsdsdssssss-"

var_dump(preg_quote($str,'-')); // 第三个参数用于自己需要对某个字符也转义

// string(16) "\\sdsdsdsdssssss\-"
