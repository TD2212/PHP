<?php
$emp=array(array(1,"Tirth",200000),array(2,"Man",200000),array(3,"Amit",100000));
foreach($emp as $e){
	 echo "<p>Employee Name:".$e[0]."|<b> Name:</b>".$e[1]."|<b> Salary </b>|$e[2]</p>";
	}
	 echo "Total Bonus".$totalbonus=$emp[0][2]+$emp[1][2]+$emp[2][2];
?>
