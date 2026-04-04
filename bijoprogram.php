<?php
$emp=array(array("id"=>"1",
"Name"=>"Tirth",
"Salary"=>200000),
array("id"=>"2",
"Name"=>"Mann",
"Salary"=>200000),
array("id"=>"3",
"Name"=>"Amit",
"Salary"=>20000));
/*Use for each loop to print the whole array attibutes*/
foreach($emp as $e){
	echo "Employee ID:".$e["id"]."<br>";
	echo "Employee Name:".$e["Name"]."<br>";
	echo "Employee Salary:".$e["Salary"]."<br>";
}

?>