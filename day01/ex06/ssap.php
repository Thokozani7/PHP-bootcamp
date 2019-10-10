#!/usr/bin/php
<?php
$string;
$str_arr;
$i = 1;
$j = 0;

$len = count($string);
while ($i < $len)
{
    $string = explode(" ", $argv[$i]);
    foreach($string as $value)
    {
    $str_arr[$j] = $value;
    $j++;
    }
    $i++;
}

echo $str_arr[2];
?>