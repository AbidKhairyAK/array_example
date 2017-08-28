<?php
for ($x = 0; $x <= 10; $x++)
	if ($x % 2 == 0){
		echo "the number is : $x<br>";
	}
echo "<br>";

$y = array(1=>"dolor","ipsum","morten","lorem");
foreach ($y as $key => $value){
	echo "$key. $value <br>";
}
?>