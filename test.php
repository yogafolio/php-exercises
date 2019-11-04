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
?>