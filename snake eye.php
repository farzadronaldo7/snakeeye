<!DOCTYPE hyml>
<html>
<body>


<?php>

$t = rand(1,6);
$r = rand(1,6);
echo $t;
echo "<br>";
echo "$r;
echo "<br>";


	if ($t == 1 and $r == 1) {
	echo "snake eyes";
	}
	
	elseif ($t == 6 or $r == 6) {
		echo "winner";
	}
	
	
	else {
		echo "u r f";	
	}
	
		
?>
	
</body>
</html>
