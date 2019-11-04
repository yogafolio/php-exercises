<?php
echo "<h2>Part 1 basic of the function</h2>";
//membuat fungsi
function perkenalan(){
	echo "Assaamualaikum, ";
	echo "Perkenalkan, nama saya James<br/>";
	echo "Senang berkenalan dengan anda<br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan();

echo "<hr>";

//memanggilnya lagi
perkenalan();
echo "<hr>";
//------------------------------------------------------------
echo "<h2>Part 2/ fungsi dengan parameter</h2>";
//membuat fungsi
function perkenalan2($nama, $salam){
	echo $salam.", ";
	echo "Perkenalkan, nama saya ".$nama."<br/>";
	echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan2("Miki", "Hi");

echo "<hr>";

$saya = "Indry";
$ucapanSalam = "Selamat pagi";
//memanggilnya lagi
perkenalan2($saya, $ucapanSalam);
echo "<hr>";

//------------------------------------------------------------
echo "<h2>Part 3 /Perameter dengan nilai default</h2>";
//membuat fungsi
function perkenalan3($name, $greeting="Assalamualaikum"){
	echo $greeting.", ";
	echo "My name is ".$name."<br/>";
	echo "Nice to meet you<br/>";
}
//memanggil fungsi yang telah dibuat
perkenalan3("rey", "Hai");
echo "<hr>";

$name2 = "Merry";
$greeting2 = "Hello";
// memanggilnya lagi tanpa mengisi parameter salam
perkenalan3($name2);
?>