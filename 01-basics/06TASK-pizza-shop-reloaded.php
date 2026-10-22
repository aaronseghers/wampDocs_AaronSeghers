<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    
	<form action="" method="get">
		<div>
			<label for="numberOfPizzas">Number of pizza's:</label>
			<input type="text" name="numberOfPizzas" id="numberOfPizzas">
		</div>
		<div>
			<label for="numberOfToppings">Aantal toppings:</label>
			<input type="text" name="numberOfToppings" id="numberOfToppings">
		</div>
		<div>
			<label for="peopleAmount">Aantal mensen:</label>
			<input type="text" name="peopleAmount" id="peopleAmount">
		</div>

		<input type="submit" value="Submit">

	<?php 
	    // ===========================================================
		// Adapt the previous task (pizza shop) and remove any unnecessary variables. 
		// Make a form where the buyer will input the number of pizzas, number of toppings per pizza, and number of people at the table. 
		// When the form is submitted, calculate the total price and how many slices each person gets if each pizza has 8 slices.
	    // ===========================================================
		

		if(isset($_GET["pizzaPrice"]) && isset($_GET["toppingPrice"]) && isset($_GET["deliveryFee"]) && isset($_GET["numberOfPizzas"]) && isset($_GET["numberOfToppings"]) && isset($_GET["peopleAmount"])){

			$pizzaPrice = 15;
			$toppingPrice = 2;
			$deliveryFee = 5;
			$numberOfPizzas = $_GET["numberOfPizzas"];
			$numberOfToppings = $_GET["numberOfToppings"];
			$peopleAmount = $_GET["peopleAmount"];
			
			$pizzaTotal = $pizzaPrice * $numberOfPizzas;
			$toppingTotal = ($toppingPrice * $numberOfToppings) * $numberOfPizzas;

			$amountOfSlices = $numberOfPizzas * 8;
			$slicesPerPerson = $amountOfSlices / $peopleAmount;

			$total = $pizzaTotal + $toppingTotal + $deliveryFee;

			echo "<h1>" . "Rekening:" . "</h1>";
			echo "<p>" . $numberOfPizzas . " pizza's" . "</p>";
			echo "<p>" . "Prijs per pizza: €" . $pizzaPrice . "</p>";
			echo "<p>" . $numberOfToppings . " toppings per pizza". "</p>";
			echo "<p>" . "Prijs per topping: €" . $toppingPrice . "</p>";
			echo "<p>" . "Prijs aan pizza's: €" . $pizzaTotal . "</p>";
			echo "<p>" . "Prijs aan toppings: €" . $toppingTotal . "</p>";
			echo "<p>" . "Totaalprijs: €" . $total . "</p>";
			echo "<p>" . "Aantal slices per persoon: " . $slicesPerPerson . " slices" . "</p>";
		}

		

	?>

	<a href="06-post.php" class='previousTopic' disabled>Ga naar vorig topic</a>
    <a href="07-math.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>