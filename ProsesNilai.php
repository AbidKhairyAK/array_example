<?php
$x=$_POST["x"];

if ($x>=0 && $x<=30){
	echo "Anda Mendapatkan Nilai : E";
}
elseif ($x>=31 && $x<=60){
	echo "Anda Mendapatkan Nilai : D";
}
elseif ($x>=61 && $x<=70){
	echo "Anda Mendapatkan Nilai : C";
}
elseif ($x>=71 && $x<=80){
	echo "Anda Mendapatkan Nilai : B";
}
elseif ($x>=81 && $x<=100){
	echo "Anda Mendapatkan Nilai : A";
}
else {
	echo "Nilai yang anda masukkan tidak valid";
}
?>