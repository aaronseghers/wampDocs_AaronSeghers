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
        //========== Loop through indexed array with foreach
        
		$indx = ["A", "B", "C", "D", "E"];
		$keyd = [$een = "Een", $twee = "Twee", $drie = "Drie", $vier = "Vier", $vijf = "Vijf"];
		$colors = ["red", "green", "black", "orange", "blue"];
		
		foreach ($indx as $indexedvalue) {
			echo "$indexedvalue <br>";
		}

		echo "<br>";

		foreach ($colors as $color){
			echo "<p style='color:$color'>$color</p>";
		}

		echo "<br>";

        //========== Loop through keyed array with foreach
        
		foreach ($keyd as $keyedvalue) {
			echo "$keyedvalue <br>";
		}
		

	?>

    <a href="10-while-loops.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="11TASK-loop-o-loop.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>