<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    
	<?php 
		//========== 1. Make a multidimensional array

		$biggestArray = [
			[
				"test",
				"Enhiereentest"
			],

			[
				"Test2 ofzo",
				"Testnogisiets"
			]
		];

        //========== 2. Visualise some data from index 1 of the array you just created (don't just print)
		
		echo "<pre>";
		echo("De eerste waarde: " . $biggestArray[0][0]);
		echo "<br></br>";
		echo("De eerste waarde: " . $biggestArray[0][1]);
		echo "</pre>";

        //========== 3. Add more data to the existing array

		$biggestArray[0][] = "Werkt dit effectief?";
		echo "<br></br>";
		echo "<pre>";
		print_r($biggestArray);
		echo "</pre>";

		// Time: 5-15 minutes
		// Record: Falco 3:23 (BINF, 2025)
	    // Ready? Push to GIT!
	?>

    <a href="04-arrays.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="05TASK-if-else-and-operators.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>