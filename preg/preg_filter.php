<?php

// preg_filter 函数 : 搜索和替换

$str = <<<EOT
dsdad127.0.0.1dfsdadads
sdef125.116.52.3sdsds
48554dsad45848dsd4saa8
EOT;
$reg = '/([0-9]{1,3}\.{1}){3}[0-9]{1}/';
$res = preg_filter($reg,'这是ip',$str);
var_dump($res);
/*
 string(65) "dsdad这是ipdfsdadads  -> 原本是 ip 的地方全部替换成了我指定的 ‘这是ip’
    sdef这是ipsdsds
    48554dsad45848dsd4saa8"
 *
 * */

//  -------------------------------------------------------------->  数组的匹配

//  php.net 上的示例代码解析:

$subject = array('1', 'a', '2', 'b', '3', 'A', 'B', '4');   // 要处理的数组
$pattern = array('/\d/', '/[a-z]/', '/[1a]/');  // 正则数组，和replace 参数同步
$replace = array('A:$0', 'B:$0', 'C:$0'); // 匹配到后替换的数值, $0 表示匹配结果的第 0 条, A: 等是普通字符串

echo "preg_filter returns\n";
print_r(preg_filter($pattern, $replace, $subject));
/*
 * preg_filter:
 *
 * 第一轮 ： \d  替换为 A: 加上它匹配到的第0条结果
 * A:1 , a , A:2 , b , A:3 , A , B , A:4    --> 未匹配和修改: A , B
 *
 * 第二轮 : [a-z] 替换为 B: 加上它匹配到的第0条结果
 * A:1 , B:a , A:2 , B:b , A:3 , A , B , A:4    --> 未匹配和修改: A , B
 *
 * 第三轮 : [1a] 替换为 C: 加上它匹配到的第0条结果
 * A:C:1 , B:C:a , A:2 , B:b , A:3 , A , B , A:4    --> 未匹配和修改: A , B
 *
 * 结果: 去除掉未匹配和修改的值
 * A:C:1 , B:C:a , A:2 , B:b , A:3 , A:4
 *
 * */

echo "preg_replace returns\n";
print_r(preg_replace($pattern, $replace, $subject));
/*
 * preg_replace:
 *
 * 第一轮 ： \d  替换为 A: 加上它匹配到的第0条结果
 * A:1 , a , A:2 , b , A:3 , A , B , A:4    --> 未匹配和修改: A , B
 *
 * 第二轮 : [a-z] 替换为 B: 加上它匹配到的第0条结果
 * A:1 , B:a , A:2 , B:b , A:3 , A , B , A:4    --> 未匹配和修改: A , B
 *
 * 第三轮 : [1a] 替换为 C: 加上它匹配到的第0条结果
 * A:C:1 , B:C:a , A:2 , B:b , A:3 , A , B , A:4    --> 未匹配和修改: A , B
 *
 * 结果: 不去除未匹配和修改的值
 * A:C:1 , B:C:a , A:2 , B:b , A:3 , A , B , A:4
 *
 * */
