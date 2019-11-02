<?php

function MaxMin($data) 
{
	$max = -999;
	$min = 999;
	for ($i=0; $i<count($data); $i++) { 
		$jumlah = 0;
		for ($j=0; $j<count($data); $j++) { 
			if ($i != $j) {
				$jumlah = $jumlah + $data[$j];
			}
		}
		if ($jumlah > $max) {
				$max = $jumlah;
			}elseif ($jumlah < $min) {
				$min = $jumlah;
			}
	}
	echo "Maka angka terkecil dan terbesarnya adalah ". $min." dan ". $max;
}

$data = [1,2,3,4,5];
MaxMin($data);
?>