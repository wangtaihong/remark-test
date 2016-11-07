<!-- 4、通过JavaScript的方法把“Hello Word!”变成"!droW olleH"。 -->
<script type="text/javascript">
function test(str){
	var str2="";
	for(var i=0;i<str.length;i++){
		str2+=str.charAt(str.length-i-1);
	}
	alert(str2);
}

test("Hello Word!");
</script>