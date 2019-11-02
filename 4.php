<?php

function hitungBarang($kualitas_barang, $quantity)
{
	if ($kualitas_barang == 'A') {
		if ($quantity > 10) {
			$potongan = $quantity * 500;		
		}else{
			$potongan = 0;
		}
		$total_harga = $quantity * 3000;
		$total_bayar = $total_harga - $potongan;

	}elseif ($kualitas_barang == 'B') {
		if ($quantity > 5) {
			$total_harga = $quantity * 3500;
			$potongan = $total_harga * 0.5;		
		}else{
			$potongan = 0;
		}
		$total_bayar = $total_harga - $potongan;

	}elseif ($kualitas_barang == 'C') {
		$potongan = 0;
		$total_harga = $quantity * 5000;
		$total_bayar = $total_harga;
	}

	echo "<li> Total Harga Barang : ". $total_harga. " </li>";
	echo "<li> Potongan : ". $potongan. " </li>";
	echo "<li> Total yang harus dibayar : ". $total_bayar. " </li>";
}

hitungBarang('A',11);

?>