<?php

function sortArray($data) {
	for ($i=0; $i<count($data); $i++) { 
		for ($j=1; $j<count($data); $j++) { 
			if (count($data[$j]) < count($data[$i])  ) {
				$a = $data[$i];
				$data[$i] = $data[$j];
				$data[$j] = $a;
			}
		}
	}

	for ($i=0; $i<count($data); $i++) { 
		for ($j=0; $j<count($data[$i]); $j++) { 
			for ($k=$j+1; $k<count($data[$i]) ; $k++) { 
				if (($data[$i][$k]) < ($data[$i][$j])  ) {
					$a = $data[$i][$j];
					$data[$i][$j] = $data[$i][$k];
					$data[$i][$k] = $a;
				}
			}
		}
	}

	for ($i=0; $i<count($data); $i++) { 
		for ($j=0; $j<count($data[$i]) ; $j++) { 
			echo $data[$i][$j];
		}
		echo "<br>";
	}
	
}

$data = [
			['a', 'c', 'b', 'e', 'd'],
			['g', 'e', 'f']
		];

sortArray($data);

?>