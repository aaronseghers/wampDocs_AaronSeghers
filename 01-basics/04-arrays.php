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
		//========== Indexed array

		$indexedarray = ["nul", "een", "twee"];

        //========== Associative/keyed array

        $keyedarray = [
			"haarkleur" => "bruin",
			"oogkleur" => "oranje"
		];

        //========== Access arrays

		// $keyedarray["oogkleur"];
		// $indexarray[0];

        //========== Manipulate arrays

        //---- add
        $keyedarray["nieuwewaarde"] = "De nieuwe waarde";
		$indexedarray[] = "derde";

		// print_r($keyedarray);
		// print_r($indexedarray);

        //---- edit

		$keyedarray["nieuwewaarde"] = "de nieuwere waarde";

        //---- remove

		// unset($indexarray[2]);
		unset($keyedarray["nieuwewaarde"]);
        // print_r($keyedarray);

        //---- remove value
		
		$keyedarray["oogkleur"] = "";
		// print_r($keyedarray);


        //========== Array functions
        
		// echo count($indexedarray);
		// echo in_array("bruin", $keyedarray);

	?>
    
    <a href="03TASK-pizza-shop.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="04TASK-multi-dimension.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>