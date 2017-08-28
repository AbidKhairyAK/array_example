<?php
$x="a";

switch ($x){
	case "a":
		echo "Ipsum";
		break;
	case "b":
		echo "Dolor";
		break;
	case "c":
		echo "Messa";
		break;
	default:
		echo "Ulnad";
}
echo "<br>";
		
$d= date('l');

switch ($d){
	case "Sunday":
		echo "Ipsum";
		break;
	case "Monday":
		echo "Dolor";
		break;
	case "Tuesday":
		echo "Messa";
		break;
	default:
		echo "Ulnad";
}
?>