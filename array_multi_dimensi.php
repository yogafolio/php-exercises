<?php
/* Array multi dimensi adalah array yang memiliki dimensi lebih dari satu. Biasanya digunakan untuk membuat matrik, graph dan struktur data rumit lainnya.*/

$matrik = [
	[2,3,4],
	[7,5,0],
	[4,3,8]
];

echo "<h2>Menampilkan array dua dimensi</h2>";

//cara mengakses isinya
echo $matrik[1][0]; //---> output: 7
echo "<hr>";

//membuat array 2 dimensi yang berisi array assosiatif
$artikel = [
	[
		"judul" => "Belajar PHP & MySQL untuk Pemula",
		"penulis" => "admin1"
	],
	[
		"judul" => "Tutorial PHP dari Nol hingga Mahir",
		"penulis" => "admin2"
	],
	[
		"judul" => "Membuat Aplikasi Web dengan PHP",
		"penulis" => "admin3"
	]
];

echo "<h2>Menampilkan array dua dimensi yang berisi array assosiatif</h2>";
//menampilkan array
foreach ($artikel as $post){
	echo "<h3>".$post["judul"]."</h3>";
	echo "<p>".$post["penulis"]."</p>";
	echo "<hr>";
}
?>