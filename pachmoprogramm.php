<?php
$emp=[32,432,24,4,43,3];
echo "The og format".$emp;
sort($emp);
echo "Assending format<br>";
print_r($emp);
rsort($emp);
echo "<br>Decending format";
print_r($emp);
?>