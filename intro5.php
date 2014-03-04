<?php
	$A = array(2,4,10,16);
	function multiply($array, $num=5){
		for($i = 0; $i < count($array); $i++){
			$array[$i] = $array[$i]*$num;
		}
		return $array;
	}

	$B = multiply($A, 6);
	var_dump($B);
?>