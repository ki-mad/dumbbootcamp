<?php

//membuat fungsi cetak gambar
function cetak_gambar($params)
{

	//cek paramater
	if ($params % 2 != 0) {
		echo "- - - panjang - - -";
		echo "<br>";

		$nilai_tengah = ($params / 2) + 0.5;
		for ($i=1; $i<=$params ; $i++) { 
			for ($j=1; $j<=$params; $j++) { 
				if ($i % 2 == 0 and $j % 2 == 0) {
					echo " = ";
				}elseif ($j == $nilai_tengah){
						echo " = ";
				}else{
					echo " * ";
				}
			}
			echo "<br>";
		}
	}else{
		echo '<script type="text/javascript">
  			alert("Parameter Harus Berupa Bilangan Ganjil");
		</script>';
	}
}

cetak_gambar(5);
?>