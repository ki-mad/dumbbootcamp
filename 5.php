<?php
function generate($jumlah)
{
	$num_segments = 4; //jumlah sekmen
	$segment_chars = 4; // jumlah karakter tiap sekmen

	$tokens = 'abcdefghijklmnopqrstuvwxyz0123456789';
	    $license_string = '';
	    for ($k=0; $k<$jumlah; $k++) { 
		    for ($i = 0; $i < $num_segments; $i++) {
		        $segment = '';
		        for ($j = 0; $j < $segment_chars; $j++) {
		            $segment .= $tokens[rand(0, strlen($tokens)-1)];
		        }
		        $license_string .= $segment;
		        if ($i < ($num_segments - 1)) {
		            $license_string .= '-';
		        }
		    }
		    echo $license_string;
		    echo "<br>";
		    $license_string = '';
		}
}

generate(5);
?>