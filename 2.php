<?php

function hitungKembalian($total_belanja, $jumlah_uang) {

	$total_kembalian = $jumlah_uang - $total_belanja;
	// menghitung total uang 50 ribu
	$jumlah = 0;
	while ($total_kembalian >= 50000) 
	{
			$jumlah++;
			$total_kembalian = $total_kembalian - 50000;
	}

	if ($jumlah > 0) {
		echo "<li>".$jumlah." x 50000 </li>";
	}	

	// menghitung total uang 20 ribu
	$jumlah = 0;
	while ($total_kembalian >= 20000) 
	{
			$jumlah++;
			$total_kembalian = $total_kembalian - 20000;
	}
	if ($jumlah > 0) {
		echo "<li>".$jumlah." x 20000 </li>";
	}	

	// menghitung total uang 10 ribu
	$jumlah = 0;
	while ($total_kembalian >= 10000) 
	{
			$jumlah++;
			$total_kembalian = $total_kembalian - 10000;
	}
	if ($jumlah > 0) {
		echo "<li>".$jumlah." x 10000 </li>";
	}	

	// menghitung total uang 5 ribu
	$jumlah = 0;
	while ($total_kembalian >= 5000) 
	{
			$jumlah++;
			$total_kembalian = $total_kembalian - 5000;
	}
	if ($jumlah > 0) {
		echo "<li>".$jumlah." x 5000 </li>";
	}	

	// menghitung total uang 2 ribu
	$jumlah = 0;
	while ($total_kembalian >= 2000) 
	{
			$jumlah++;
			$total_kembalian = $total_kembalian - 2000;
	}
	if ($jumlah > 0) {
		echo "<li>".$jumlah." x 2000 </li>";
	}	

	// menghitung total uang 1 ribu
	$jumlah = 0;
	while ($total_kembalian >= 1000) 
	{
			$jumlah++;
			$total_kembalian = $total_kembalian - 1000;
	}
	if ($jumlah > 0) {
		echo "<li>".$jumlah." x 1000 </li>";
	}	

	// menghitung total uang 500
	$jumlah = 0;
	while ($total_kembalian >= 500) 
	{
			$jumlah++;
			$total_kembalian = $total_kembalian - 500;
	}
	if ($jumlah > 0) {
		echo "<li>".$jumlah." x 500 </li>";
	}elseif ($total_kembalian < 500) {
		echo "<li>".$total_kembalian." Disumbangkan karena tidak ada pecahan dibawah 500 </li>";
	}	
}

hitungKembalian(110500, 200000)

?>