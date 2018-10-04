<html>
	<head>
		<title>Testing php</title>
	</head>
	
	<body>
		<?php
			date_default_timezone_set('UTC');
			echo "The data was processed successfully<br/>";
			echo date('h:i:s a, l F jS Y e');
			
			//Lets grab all the info from the form
			$fName = $_POST['firstName'];
			$lName = $_POST['lastName'];
			$gender = $_POST['gender'];
			$favSport = $_POST['favSport'];
			$favColor = $_POST['favColor'];
			
			
			//We now hold all the given information in the given variables
			//Lets print everything to the user
			echo "<br/><br/><br/>We have all your information:<br/>";
			echo $fName . "<br/>";
			echo $lName . "<br/>";
			echo $gender . "<br/>";
			echo $favSport . "<br/>";
			echo $favColor . "<br/>";
			
			//Lets play around with arrays
			$arr  = array('bob', 'Al', 'Marco');
			//How do we print the array?
			$arr[3] = "Bobby";
			
			echo "<br/><br/>Hello " . $arr[2] . "<br/>";
			
			for($i = 0; $i<4 ;$i++){
				echo "Index : " . $i . " -> " . $arr[$i] . "<br/>";
			}
			
			
			function addNums($num1,$num2)
			{
				return $num1 + $num2;
			}
			
			echo "<br/><br/>9+23 = " . addNums(9,23) . "<br/><br/>";
			
			
		?>
	</body>
</html>
