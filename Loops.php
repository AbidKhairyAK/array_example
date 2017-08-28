<DOCTYPE html>
<html>
<head>
</head>
<body>
<table>
<tr>
	<td>
		<?php
			$x=10;
			while($x >= 1){
				echo "angka ke : $x <br>";
				$x--;
			}
		?>
	</td>
	<td>
		<?php
			$w=1;
			while($w <= 10){
				echo "angka ke : $w <br>";
				$w++;
			}
		?>
	</td>
	<td>
		<?php
			$z=0;
			while($z <= 10){
				echo "angka ke : $z <br>";
				$z++;
				$z++;
			}
		?>
	</td>
	<td>
		<?php
			$v=1;
			while($v <= 10){
				echo "angka ke : " . $v++ * 3 . "<br>";
			}
		?>
	</td>
	<td>
		<?php
			$y=3;
			do {
				echo "santri ke $y <br>";
				$y++;
			} while($y <= 10);
		?>
	</td>
</tr>
</table>
</body>
</html>