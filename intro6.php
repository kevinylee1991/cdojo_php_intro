<?php
	$A = array(2,3,'hello');
	function print_lists($array){
		echo "<ul>";
		for ($i = 0; $i < count($array); $i++){
			echo "<li>{$array[$i]}</li>";
		}
		echo "</ul>";
	}
	print_lists($A);
?>