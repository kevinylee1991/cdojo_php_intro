<?php
	$users = array(
		"first_name" => "Michael",
		"last_name" => "Choi",
		"asdf" => "asdf"
	);

	function print_array($array){
		echo "There are " . count(array_keys($array)) . " keys in this array: ";
		foreach ($array as $key=>$value){
			echo $key;
			echo " ";
		}
		echo "<br>";
		foreach($array as $key=>$value){
			echo "The value in the key '" . $key . "' is '" . $value . "'";
			echo "<br>";
		}
	}

	print_array($users);
?>