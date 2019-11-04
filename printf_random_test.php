<?php
	/*
	%s is a placeholder for text (string)
	%d for bilangan desimal (integer);
	%f for pecahan (float);
	%b for boolean
	*/
	echo "<h3>The first is using %s</h3>";
	$text = "w3school.com";
	printf("I am learning PHP Programming in %s", $text);
	//======================================================
	echo "<br>";
	$number = 100 + 20;
	echo $number."<br>";
	printf("The number will be converted as stings %s", $number);
	//======================================================
	echo "<h3>The second is using %d</h3>";
	$desimal1 = 10;
	$desimal2 = 100.23;
	printf("The 1st decimal value is %d", $desimal1);
	echo "//nilai desimal1 = 10 menjadi 10";
	echo "<br>";
	printf("The 2nd decimal value is %d", $desimal2);
	echo "//nilai desimal2 = 100.23 menjadi 100";
	//======================================================
	echo "<h3>The third is using %f</h3>";
	$float1 = 10.05;
	$float2 = 10000;
	$float3 = 12.453671;
	printf("The 1st float value is %.2f", $float1);
	echo "//2 bilangan pecahan di belakang koma";
	echo "<br>";
	printf("The  2nd float value is %.4f", $float2);
	echo "//4 bilangan pecahan di belakang koma";
	echo "<br>";
	printf("The 3rd float value is %.3f", $float3);
	echo "//3 bilangan pecahan di belakang koma";
	//======================================================
	echo "<h3>The fourth is using %b</h3>";
	$bolean1 = 1;
	$bolean2 = 0;
	$bolean3 = 3;
	printf("The 1st boolean is %b", $bolean1);
	echo "//The decimal 1 is converted as boolean = '1'";
	echo "<br>";
	printf("The 2nd boolean is %b", $bolean2);
	echo "//The decimal 0 is converted as boolean = '0'";
	echo "<br>";
	printf("The 3rd boolean is %b", $bolean3);
	echo "//The decimal 3 is converted as boolean = '11'";
?>