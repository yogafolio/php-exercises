<?php
	/*
	%s it's a placeholder for text (string)
	%d it's (integer);
	%f it's (float);
	%b it's boolean;
	now we can use %f, to view how to the value is shown
	*/
	$harga = 100000;
	echo "The price is Rp $harga"; //if we print with echo
	echo "<br>";
	printf ("The price is Rp %.2f", $harga); //if we print with echo

?>