<html>
<body>
<form method="post">
Enter first element=
<input type="text" name="array1"><br>
Enter second element=
<input type="text" name="array2"><br>
<input type="Submit" name="Submit" value="Submit">
</form>
<?php
if(isset($_POST['Submit'])){
	$array1=explode(",",$_POST['array1']);
	$array2=explode(",",$_POST['array2']);
	//convert the string into array below two line and above two line
	//print_r($array1);
	//print_r($array2);
	//This is use for reverse the array 
	//print_r(array_reverse($array1));
	//$m=array_merge($array1,$array2);
	//sort($m);
//	print_r($m);
	$sum=array_sum($array1);
	echo $sum;
}
?>
</body>
</html>