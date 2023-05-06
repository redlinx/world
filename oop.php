<?php
/*
Created by Francis Rey Padao
Date Created May 06 2023
*/

class city{

	public function display_hello_world(){
		echo "Hello world";
	}

	function count_population($number){
		$number  = $number + 10;
		return $number;
	}

}

$city = new city();

$population = $city->count_population(5);

$population++;

echo $population;
?>