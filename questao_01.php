<?php

	// The current code loops through numbers from 1 to 100 inclusive, 
	// and prints:
	// 		* Fizz: if the number is multiple of 3
	// 		* Buzz: if the number is multiple of 5
	// 		* The number: if it is neither multiple of 3 or 5


	// Loops through numbers from 1 to 100
	for ($index= 1; $index <= 100; $index++) {

		// Flag to capture if the number is multiple of 3 or 5 ate the end of execution
		$isMultipleOf3Or5 = false;

		// If index is multiple of 3
		if ($index % 3 == 0) {
			// Set flag to true to indicate that the number is multiple of 3
			$isMultipleOf3Or5 = true;
			echo "Fizz";
		}

		if ($index % 5 == 0) {
			// Set flag to true to indicate that the number is multiple of 5
			$isMultipleOf3Or5 = true;
			echo "Buzz";
		}

		// Only print index if number is neither multiple of 3 or 5
		if ($isMultipleOf3Or5 == false) {
			echo $index;
		}

		// Print out a space between each interation
	    echo " ";
	} 