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

		$bezoekers = ["Johnny", "Jack", "Ferdy", "Braien", "Kraanman"];


		//========== functions

		function mijnEersteFunctieMetEenVerwarrendeNaam(){
		
		};

		//========== calling functions
		
		mijnEersteFunctieMetEenVerwarrendeNaam();

		//========== return values
		
		function mijnEersteFunctieMetEenVerwarrendeNaam2(){
			return "zwevende data";	
		};
		
		mijnEersteFunctieMetEenVerwarrendeNaam2();
		$teruggestuurdedata = mijnEersteFunctieMetEenVerwarrendeNaam2(); // opslaan voor later gebruik
		echo "$teruggestuurdedata";



		//========== functions with (fallback) parameters
		
		function lachenMet($naam = "Lars"){

		}

	?>

	<a href="11TASK-loop-o-loop.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="12TASK-roll-dice.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>


