<?php
//编写一个程序，实现获取n到m之间所有的水仙花数（水仙花数：由3个数字组成的如153，1^3+5^3+3^3=153，每位的数字的立方相加等于数字本身，就是水仙花数）
function exam1($num){
    //获取百位上的数字 十位上的数字 个位上的数字
    $baiwei = floor($num/100);
    $shiwei = floor($num/10)%10;
    $gewei = floor($num%10);
    // echo "baiwei:$baiwei,shiwei:$shiwei,gewei:$gewei";
    $sum = ($baiwei*$baiwei*$baiwei)+($shiwei*$shiwei*$shiwei)+($gewei*$gewei*$gewei);
    if($num == $sum){
        echo "是水仙花数";
    }
    else{
        echo "不是水仙花数";
    }
}
// exam1(153);
//编写一个程序，给定一个英文字符串,请编写一个PHP函数找出这个字符串中首先出现三次的那个英文字符(需要区分大小写)
function exam2($str){
    $len = strlen($str);
    $arr = [];
    for ($i=0; $i <$len-1; $i++) { 
        if(isset($str[$i])){
            $arr[$str[$i]]++;
        }
        else{
            $arr[$str[$i]] = 1;
        }
        
        if($arr[$str[$i]] == 3){
            echo $str[$i];
        }
    }
}
// exam2('hello list you!')
//3．编写一个函数，判断一个字符串是否为回文字符串，回文字符串是指从头往后读与从后往前读是同样的顺序，如“abba”。要求：
function exam3($str){
    $len = strlen($str);
    $res = '';
    //将字符串反转
    for ($i=$len-1; $i >=0 ; $i--) { 
        $res .= $str[$i];
    }
    // echo $res;
    for ($i=0; $i <$len-1 ; $i++) { 
        if($str[$i] != $res[$i]){
            echo "不是回文字符串";
            return false;
        }
    }
    echo "是回文字符串";
    return true;
}
// exam3('abcba');
//编写一个函数，传入一个数字n，返回1到n之间的斐波那契数列（斐波那契数列：1 1 2 3 5 8 13....每一个值都是前两个值的和）
function exam4($num){
    $arr = [];
    $arr[0] = $arr[1] = 1;
    $i = 2;
    while($num){
        $arr[$i] = $arr[$i-1] + $arr[$i-2];
        if($arr[$i] < $num){
            $i++;
        }
        else{
            $num = 0;
        }
        
    }
    return $arr;
}
// print_r(exam4(8));
//编写一个函数，传入一个十进制数字，返回数字对应的英文字母：
function exam5($num){
    //生成数组 里面包含a-z26个字母
    $list = [];
    $arr = range('a','z');
    // print_r($arr);
    $len = count($arr);
    $tmp = floor($num/$len); //商
    $rem = floor($num%$len); //余数
    // echo "商是:$tmp,余数是:$rem"; die;
    while($num){
        if($rem == 0){
            $tmp--;
            array_unshift($list,$arr[$len-1]);
        }
        else{
            array_unshift($list,$arr[$rem-1]);
        }
        $num = $tmp;
    }
    return implode('',$list);
    
}
print_r(exam5(26));
//编写一个函数，传入一个数字n代表台阶的个数，每次只能走1阶或者2阶台阶，返回走到第n阶台阶一共有多少种走法
function exam6($num){
    $arr = [];
    if($num == 1){
        echo 1;
    }
    $arr[0] = $arr[1] = 1;
    $i = 2;
    while($num){
        $arr[$i] = $arr[$i-1] + $arr[$i-2];
        if($i == $num){
            
            $num =0;
        }
        else{
            $i++;
        }
    }
    return $arr[$i];
    
}
// print_r(exam6(4));
?>