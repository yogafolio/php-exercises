<?php
//konstanta __trait__ akan berisi nama trait dan namespace

//membuat name space
namespace Enemy;

//membuat trait
trait Makhluk {
	function printTrait(){
		echo "Nama Trait adalah: " . __TRAIT__;
	}
}

class ManusiaSerigala {
	use Makhluk;
}

//membuat objek
$aku = new ManusiaSerigala();
$aku->printTrait();
echo "<hr>";
//====================================

//konstanta __METHOD__
//Konstanta __METHOD__ sama seperti konstanta __FUNCTION__. Ia akan berisi nama method dan class tempat ia digunakan.
echo "<h2>Konstanta __METHOD__</h2>";
class ManusiaSerigala2 {
	function lari(){
		echo "ini adalah method: ".__METHOD__."<br>";
	}
	function lompat () {
		echo "ini adalah method: ".__METHOD__."<br>";
	}	
}

//membuat objek
$aku = new ManusiaSerigala2();
$aku->lari();
$aku->lompat();
echo "<br>";
//===============================================
?>