<?php

$a1= array("Abid", "Khalid ", "Basalamah");
echo "CONTOH INDEXED ARRAY I<br><br>".$a1[0]." Bukan ".$a1[1].$a1[2];

$a2= array("Abid", "Khalid ", "Basalamah");
echo "<br><br><br>CONTOH INDEXED ARRAY II<br><br>Isi array di atas = ".count($a2);

$a3= array("I = Abid", "II = Khalid ", "III = Basalamah");
$arl3= count($a3);
echo "<br><br><br>CONTOH INDEXED ARRAY III<br><br>";
for ($x = 0; $x < $arl3; $x++){
	echo "yang ".$a3[$x]."<br>";
}

$b1= array("Abid" => "Bulukumba", "Khalid ", "Basalamah");
echo "<br><hr><br>CONTOH ASSOCIATIVE ARRAY I<br><br>Abid tinggal di ".$b1['Abid'];

$b2= array("Abid" => "Bugis", "Khalid" => "Konjo", "Basalamah" => "Toraja");
echo "<br><br><br>CONTOH ASSOCIATIVE ARRAY II<br><br>";
foreach ($b2 as $k => $v){
	echo $k." Adalah Suku ".$v."<br>";
}

$b3= array(1 => "Abid", "Khalid", "Basalamah");
echo "<br><br><br>CONTOH ASSOCIATIVE ARRAY III<br><br>";
foreach ($b3 as $k => $v){
	echo "Anak ke-".$k." Adalah ".$v."<br>";
}
?>