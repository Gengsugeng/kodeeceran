<?php 

require('BCAParser.php');

$parser = new BCAParser('fatkulam0612','643685');

$transaksi = $parser->getListTransaksi('2018-03-01','2018-03-10');

$parser->logout();

foreach ($transaksi as $value) {
	echo $value['0'];
}

?>