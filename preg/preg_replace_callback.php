<?php

// preg_replace_callback 函数 : 默认非贪婪匹配
$str = '14848sdsdasds';
$res = preg_replace_callback('/\d/',function ($match){
    print_r($match); // $match 为数组，不能直接echo
    return 'sss';   // 返回结果进行替换
},$str);
/*
 *  每一次 $match 的值
 *  Array
    (
        [0] => 1
    )
    Array
    (
        [0] => 4
    )
    Array
    (
        [0] => 8
    )
    Array
    (
        [0] => 4
    )
    Array
    (
        [0] => 8
    )
 *
 * */

var_dump($res);
/*
 * string(23) "ssssssssssssssssdsdasds"  返回的是替换的结果
 *
 * */
