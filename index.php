


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practice</title>
</head>
<body>



			<!-- GPA Calculator using Switch case -->


	<?php 

		echo "GPA Calculator using Switch case <br><br>";

		$marks= 85;		// Change Grade Marks here

		switch ($marks) {

			case ($marks>=80 && $marks<=100):

				echo "Grade A+";
				break;

			case ($marks>=70 && $marks<=79):

				echo "Grade A";
				break;

			case ($marks>=60 && $marks<=69):

				echo "Grade A-";
				break;

			case ($marks>=50 && $marks<=59):

				echo "Grade B";
				break;

			case ($marks>=40 && $marks<=49):

				echo "Grade C";
				break;

			case ($marks>=33 && $marks<=39):

				echo "Grade D";
				break;

			case ($marks>=0 && $marks<=32):

				echo "Grade F";
				break;	

			default:
				echo "Invalid";
				break;

		}


	?>


	<br>
	<br>


			<!-- Detecting EVEN & ODD Numbers using if...else -->


	<?php 

		echo "Detecting EVEN & ODD Numbers<br><br>";

		$numbers=12;

		if ($numbers % 2 == 0){

			echo "Even";

		} else {

			echo "ODD";

		}


	?>





	<br>
	<br>


			<!-- Print (1-100) all ODD Numbers using for loop & if...else -->


	<?php 

		echo "Print (1-100) all ODD Numbers<br><br>";

		$numbers=1;

		for ($i=0; $i <=100 ; $i++){ 

			if ($i % 2 !=0){

				echo $i.", ";

			}

		}


	?>




	<br>
	<br>


			<!-- Print (1-100) all using for loop -->

	<?php 

		echo "Print (1-100) by for loop<br><br>";
		
		for ($i=0; $i <=100 ; $i++){ 

			echo "$i, ";

		}


	?>



	<br>
	<br>


			<!-- Print (0-100) all using while loop-->


	<?php
		
		echo "Print 0-100 by while loop<br><br>";

		$number=0;

		while ($number <=100) {

			echo $number.", ";

			$number++;

		}


	?>
		
		

</body>
</html>







