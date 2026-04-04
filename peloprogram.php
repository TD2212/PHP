<?php
date_default_timezone_set("Asia/Kolkata");
$hour=date("H");
echo "Current time".date("H:m:s")."<br>";

/*his is for the date current time function
 d - Represents the day of the month (01 to 31) 
● D- Represents the three letter of Day(Mon) 
● m - Represents a month (01 to 12) 
● M- Represents the Three letter of Month(Jan-Dec) 
● Y - Represents a year (in four digits) 
● y-  Represents the year (in two digits) 
● l (lowercase 'L') - Represents the day of the week 
● H - 24-hour format of an hour (00 to 23) 
● h - 12-hour format of an hour with leading zeros (01 to 12) 
● i - Minutes with leading zeros (00 to 59) 
● s - Seconds with leading zeros (00 to 59) 
● a - Lowercase Ante meridiem and Post meridiem (am or pm)*/
echo "Current date".date("d:m:y")."<br>";
//echo "Current week".date("D:L:Y");
if($hour>12){
	echo "Good Afternoon <br>";
}
elseif($hour>18){
	echo "Good evening <br>";
	}
else{ echo "Good night";}
?>
