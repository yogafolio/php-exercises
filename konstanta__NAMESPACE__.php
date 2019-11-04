<?php
//konstanta __NAMESPACE__
//konstanta __NAMESPACE__ akan berisi nama namespace

namespace Enemy;

class ManusiaSerigala {
	function printNamaNamespace(){
		echo "Nama namespace adalah: ".__NAMESPACE__;
	}
}

//membuat objek
$aku = new ManusiaSerigala();
$aku->printNamaNamespace();
?>