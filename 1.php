<?php
/**
 * 将字符串how_are_you转换成HowAreYou形式
 * @param  string $str [description]
 * @return [string]      [description]
 */
function toUpper($str){
	$arr=explode("_", $str);
	$result="";
	foreach ($arr as $key => $value) {
		$result.=ucwords($value);
	}
	return $result;
}

$str="how_are_you";
$res=toUpper($str);
var_dump($res);