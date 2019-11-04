<?php

//membuat array
$hobi = [
	"Membaca",
	"Menulis",
	"Ngeblog"
];

//menambahkan isi pada indeks ke-3
$hobi[3] = "Coding";

//menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";
// unset($hobi[4]);

//mengubah isi array pada indeks ke-1
$hobi[1] = "Menyanyi";

//Cetak array dengan perulangan
foreach ($hobi as $hobiku){
	echo $hobiku."<br>";
}

?>