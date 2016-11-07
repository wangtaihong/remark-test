<?php
/**
 * 自字符串转换为a标签
 * @param  array $arr 字串数组
 * @param  string $str 要处理的字符串
 * @return array      结果
 */
function replace_to_Atarget($arr,$str){
	foreach ($arr as $key => $value) {
		$str =str_replace($value,"<a href='$value' >$value</a>", $str);
	}
	return $str;
}

$str=replace_to_Atarget($array,$text_string);
var_dump($str);
/*
结果：
string(524) "<a href='Chinese' >Chinese</a>是中国人的意思，<a href='Chinese' >Chinese</a> companies是什么意思? <a href='Chinese' >Chinese</a> 与 <a href='Chinese' >Chinese</a> companies 是什么关系？<a href='Chinese' >Chinese</a> companies不能代替<a href='Chinese' >Chinese</a>. <a href='United States' >United States</a>是美国，<a href='United States' >United States</a> of America也是美国，但<a href='United States' >United States</a>也不能代替<a href='United States' >United States</a> of America"
<a href='Chinese' >Chinese</a>是中国人的意思，<a href='Chinese' >Chinese</a> companies是什么意思? <a href='Chinese' >Chinese</a> 与 <a href='Chinese' >Chinese</a> companies 是什么关系？<a href='Chinese' >Chinese</a> companies不能代替<a href='Chinese' >Chinese</a>. <a href='United States' >United States</a>是美国，<a href='United States' >United States</a> of America也是美国，但<a href='United States' >United States</a>也不能代替<a href='United States' >United States</a> of America
 */