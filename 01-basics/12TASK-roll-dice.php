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
	    // ===========================================================
		// Write a function "rollDice" that rolls a die of X sides times the amount(Y) of dice.
		// Figure out how to implement X and Y.
		// Return a string which mentions all rolled dice and gives a total. 
	    // ===========================================================
		
		

		function rollDice($sides, $dices){
			$totalPoints = 0;
			$returnstring = "";
			
			for($i = 0; $i <= $dices; $i++){
				$individualRoll = rand(1, $sides);
				$totalPoints += $individualRoll;
				echo "Je rolde een 1D$sides en kreeg $individualRoll punten. <br>";
			}
			
			echo "Je hebt in totaal $totalPoints punten.";
		}

		echo rollDice(6,2);

		// Time: 5-12 minutes
		// Record: 10:57 Falco (BINF, 2025)
		// Ready? Upload to smartschool!
	?>

	<a href="12-functions.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="13TASK-string-functions.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>