<?php
$d=$_POST["diskon"];
$h= $d * 50 / 100;
if ($d >= 50000){
	echo $d - $h;
} else {
	echo "Anda Tidak Memenuhi Persyaratan Diskon";
}
?>