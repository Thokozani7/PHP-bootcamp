#!/usr/bin/php
<?php
$i = 1;
$j = 0;
while ($i < $argc)
{
    $string = explode(" ", $argv[$i]);
    foreach($string as $value)
    {
        $str_arr[$j] = $value;
        $j++;
    }
    $i++;
}
sort($str_arr);
foreach($str_arr as $value)
    echo $value."\n";
?>