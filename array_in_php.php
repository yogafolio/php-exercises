<?php
echo "<h2>Membuat Array di PHP</h2>";
//membuat array kosong
$buah = array();
$hobi = [];

//membuat array sekaligus mengisinya
$minuman = array ("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

//membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Bond";

//----------------------------------
$item = ["Bunga", 123, 39.12, true];
echo "END";
echo "<hr>";
//------------------------------------------------------
echo "<h2>Menampilkan isi Array</h2>";
echo "<h3>Menampilkan isi secara manual tanpa loop</h3>";
//membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

//menampilkan isi array
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang [2]."<br>";

echo "END";
echo "<hr>";
//------------------------------------------------------

echo "<h3>Menampilkan isi secara otomatis dengan loop (FOR)</h3>";
//membuat array
$barang2 = array("Baju","Sepatu","Sandal","Celana","Jam Tangan","Tali Pinggang","Topi");
//menampilkan isi array dengan perulangan for
	for ($i = 0; $i < count($barang2); $i++) {
		echo $barang2[$i]."<br>";
	}
echo "END";
echo "<hr>";

echo "<h3>Menampilkan isi Array dengan loop (Foreach)</h3>";
//membuat array
$barang3 = ["Baju Hitam", "Baju Merah", "Baju Biru", "Baju Ungu"];

//menampilkan isi array dengan perulangan foreach
foreach ($barang3 as $isi) {
	echo $isi."<br>";
}

echo "END";
echo "<hr>";

echo "<h3>Menampilkan isi Array dengan loop (While)</h3>";
//membuat array
$barang4 = array("Guitar", "Piano", "Violin", "Saxophone", "Drum");

//menampilkan isi array dengan perulangan while
$i = 0;
while ($i < count($barang4)) {
	echo $barang4[$i]."<br>";
	$i++;
}
echo "END";
echo "<hr>";
?>