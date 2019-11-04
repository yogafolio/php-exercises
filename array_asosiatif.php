<?php
echo "<h2>Menggunakan tanda => untuk mengasosiasikan sebuah kata kunci dengan isi array</h2>";
//membuat array asosiatif
$artikel = [
	"judul" => "Belajar Pemrograman PHP",
	"penulis" => "admin",
	"view" => 128
];

echo "<pre>";
print_r($artikel);
echo "</pre>";

//mencetak isi array assosiatif
echo "<h3>".$artikel["judul"]."</h3>";
echo "<p>oleh: ".$artikel["penulis"]."</p>";
echo "<p>View: ".$artikel["view"]."</p>";
echo "<hr>";

echo "<h2>Menggunakan metode lain</h2>";
$email = array("1","2","3","4","5");
$email["subjek"] = "Apa kabar?";
$email["pengirim"] = "admin@domain.com";
$email["isi"] = "Apa kabar? sudah lama tidak berjumpa";

echo "<pre>";
print_r($email);
echo "</pre>";
echo "<hr>";
?>