<?php

// foreach lebih khusus digunakan untuk mencetak array
// foreach especially to print array
// foreach ($array as $data) {
// 	echo $data;
// }

$books = [
	"Panduan Belajar PHP untuk Pemula",
	"Membangun Aplikasi Web dengan PHP",
	"Tutorial PHP dan MySQL",
	"Membuat Chat Bot dengan PHP",
	"Buku Contoh Program PHP"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach ($books as $buku) {
	echo "<li>$buku</li>";
}
echo "</ul>";
?>