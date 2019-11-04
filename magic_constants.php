<?php
//Konstanta __LINE__
echo "<h2>Konstanta __LINE__</h2>";
echo "Ini baris pertama<br>";
echo "Ini baris ke: ". __LINE__ . "<br>";
echo "ini baris ketiga<br>";
echo "Ini baris ke: ". __LINE__ . "<br>";
echo "<hr>";
//============================================
//Konstanta __FILE__
echo "<h2>Konstanta __FILE__</h2>";
echo "File ini berada di: " . __FILE__;
echo "<hr>";
//============================================
//Konstanta __DIR__
echo "<h2>Konstanta __DIR__</h2>";
echo "File ini berada di direktori: " . __DIR__;
//Konstanta __DIR__ biasanyad igunakan untuk mengimpor file lain
// include __DIR__."/fungsi_rekursif.php";
echo "<hr>";
//============================================
echo "<h2>Konstanta __FUNCTION__</h2>";
function proses() {
echo "Nama fungsi ini adalah: " . __FUNCTION__;
}

//panggil fungsi
proses();
echo "<hr>";
//================================================
//konstanta __class__ akan berisi nama dari class
echo "<h2>Konstanta __CLASS__</h2>";
class IPA1 {
	function printClassName(){
		echo "Nama class adalah: ".__CLASS__;
	}
}

//membuat objek
$aku = new IPA1();
$aku->printClassName();
echo "<hr>";
//=====================================================

?>