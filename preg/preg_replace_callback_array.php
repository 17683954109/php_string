<?php

// preg_replace_callback_array 函数 :
$str = '15515,sdsdsd';
$res = preg_replace_callback_array(
    [
        '/\d/'=>function($match){
        //  匹配到的结果每一次都会经过该函数处理
            return 'sss';
    }
],$str);

var_dump($res);
/*
 * string(22) "sssssssssssssss,sdsdsd" 匹配到的数值被修改为sss
 *
 * */
