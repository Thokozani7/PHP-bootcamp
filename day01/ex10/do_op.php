#!/usr/bin/php
<?php
$var = array();
$i = 1;
$j = 0;
if ($argc == 4)
{
    while($i < $argc)
    {
            $var[$j] = trim($argv[$i]);
            $i++;
            $j++;
        }
        if($var[1] == '+')
            echo ($var[0] + $var[2])."\n";
        if($var[1] == '%')
            echo ($var[0] % $var[2])."\n";
        if($var[1] == '-')
            echo ($var[0] - $var[2])."\n";
        if($var[1] == '/')
            echo ($var[0] / $var[2])."\n";
        if($var[1] === '*')
            echo ($var[0] * $var[2])."\n";
}
else
    echo "Incorrect Parameters\n";
?>