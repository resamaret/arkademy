<?php 

function sortNumber($string){

	$PecahStr = str_split($string);
	$kata = array();
	for ($i = 0; $i < count($PecahStr); $i++) {
	
		if ($PecahStr[$i]=="0"||$PecahStr[$i]=="1"||$PecahStr[$i]=="2"||$PecahStr[$i]=="3"||$PecahStr[$i]=="4"||$PecahStr[$i]=="5"||$PecahStr[$i]=="6"||$PecahStr[$i]=="7"||$PecahStr[$i]=="8"||$PecahStr[$i]=="9") {
			$kata[] = $PecahStr[$i];
		}
	}

	if (count($kata)==0) {
		echo '“No number found in parameter!”';
	}else{
		sort($kata);
		for ($i = 0; $i < count($kata); $i++) {
			echo $kata[$i];
		}
	}

	return $string;
}

sortNumber("resa0110");

?>