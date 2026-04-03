<?php 
date_default_timezone_set('Asia/Kolkata'); // Set timezone to New York 
 
// Get the current hour 
$hour = date("H"); 
 
// Display the current time 
echo "Current Time: ". date("H:i:s") . "<br>"; 
echo "Current Date: ". date("Y:m:d") . "<br>"; 
 
// Display a greeting based on the time of day 
if ($hour < 12) { 
    echo "Good Morning!"; 
} elseif ($hour < 18) { 
    echo "Good Afternoon!"; 
} else { 
    echo "Good Evening!"; 
} 
?> 