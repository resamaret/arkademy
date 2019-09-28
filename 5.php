<?php 

function countChar($string , $kondisi){

	$PecahStr = str_split($string);
	$kata = array();
	for ($i = 0; $i < count($PecahStr); $i++) {
		$kata[] = $PecahStr[$i];
	}

	$countKata = 0;

	if (count($kata)==0) {
		echo '“No number found in parameter!”';
	}else{
		for ($i = 0; $i < count($kata); $i++) {
			if ($kata[$i]==$kondisi) {
				$countKata += $countKata + 1;
			}
		}
	}
	if ($countKata==0) {
		echo 'Not Found';
	}else{
		echo $countKata;
	}
}

countChar("resa0110","x");

?>