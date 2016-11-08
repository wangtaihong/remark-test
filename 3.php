<?php
//为了解决a标签重复嵌套，先把数组按长度排序，长的在前面

/**
 * 先对字符串数组按长度逆序排序
 * @param  array $arr [description]
 * @return array      [description]
 */
function mySort($arr){
	$len=count($arr);
	for($i=0; $i < $len; $i++){
		for($j = $i+1;$j < $len; $j++){
			if ( (strlen($arr[$j]) > (strlen($arr[$i])))) {
				$temp=$arr[$i];
				$arr[$i]=$arr[$j];
				$arr[$j]=$temp;
			}
		}
	}
	return $arr;
}
/*
array(4) {
  [0]=>
  string(24) "United States of America"
  [1]=>
  string(17) "Chinese companies"
  [2]=>
  string(13) "United States"
  [3]=>
  string(7) "Chinese"
}
 */

/*
//这个函数有错误，于是重写了后面的函数
function replace_to_Atarget($arr,$str){
	foreach ($arr as $key => $value) {
		$str =str_replace($value,"<a href='$value' >$value</a>", $str);
	}
	return $str;
}
 */


/**
 * 子字符串替换为a标签
 * @param  array $arr 字串数组
 * @param  string $str 要处理的字符串
 * @return array      结果
 */
function replace_to_Atarget($arr,$str){
	$flag=array();
	//为了解决a标签重复嵌套，把test里的关键词替换成一个唯一id
	//每一个唯一id对应一个替换后的a标签，存在数组flag中
	foreach ($arr as $key => $value) {
		//value替换为：
		$to=str_replace($value, "<a href='$value' >$value</a>", $value);
		//生成一个唯一id
		$uniqid=uniqid();
		//使用唯一id替换text中的关键字
		$str=str_replace($value, $uniqid, $str);
		//把唯一id和对应的a标签存在数组
		$flag[$uniqid]=$to;
	}

	//最后循环flag数组，把text中的唯一id换成对应的a标签
	foreach ($flag as $key => $value) {
		$str=str_replace($key, $value, $str);
	}
	return $str;
}


$array = ['Chinese', 'Chinese companies', 'United States', 'United States of America'];
$text_string = 'Chinese是中国人的意思，Chinese companies是什么意思? Chinese 与 Chinese companies 是什么关系？Chinese companies不能代替Chinese. United States是美国，United States of America也是美国，但United States也不能代替United States of America';

//数组排序：
echo "<pre>";
$arr=mySort($array);
var_dump($arr);

//替换a标签：
$str=replace_to_Atarget($arr,$text_string);
var_dump($str);

/*
正则匹配效率会更高，会省去很多麻烦，目前我正在学习正则匹配
 */
