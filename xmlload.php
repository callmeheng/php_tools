<?php
/**
 * @author https://github.com/callmeheng
 * PHP解析xml并去掉cdata       
 */


$a = simplexml_load_string($responseText);

$str = $a->goods->product_url;

//去掉cdata
$start = strrpos($str,"[") + 1;

$end = strpos($str,"]");

echo substr($str,$start,$end-$start);

echo "\n";
exit;