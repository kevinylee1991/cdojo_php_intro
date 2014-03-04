<?php
	for ($i = 0; $i < 2001; $i++){
		echo "Number is {$i}. This is an ";
		
		if ($i % 2 === 0){
			echo "even";
		}
		else{
			echo "odd";
		}

		echo " number.";
		echo "<br>";
	}
?>