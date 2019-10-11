#!/usr/bin/php
<?php
if ($argc != 1)
{
    $val = trim($argv[1]);
    $val = preg_replace('/\s+/', ' ', $val);
    echo $val."\n";
}
?>