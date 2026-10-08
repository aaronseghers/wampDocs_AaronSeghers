<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Shop</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    
	<?php 
	// ===========================================================
	// 1. Make variables for: pizza price, topping price, delivery fee, number of pizzas ordered, number of toppings per pizza, and number of people at the table.

	$pizzaPrice = 15;
	$toppingPrice = 2;
	$deliveryFee = 0;
	$numberOfPizzas = 2;
	$numberOfToppings = 2;
	$peopleAmount = 2;

	// 2. Calculate the total price of the order, and how many slices each person gets if each pizza has 8 slices.
	
	$pizzaTotal = $pizzaPrice * $numberOfPizzas;
	$toppingTotal = ($toppingPrice * $numberOfToppings) * $numberOfPizzas;

	$amountOfSlices = $numberOfPizzas * 8;
	$slicesPerPerson = $amountOfSlices / $peopleAmount;

	$total = $pizzaTotal + $toppingTotal + $deliveryFee;
	
	// 3. Echo out the results in a user-friendly way.
	// ===========================================================

	echo "<h1>" . "Rekening:" . "</h1>";
	echo "<p>" . $numberOfPizzas . " pizza's" . "</p>";
	echo "<p>" . "Prijs per pizza: €" . $pizzaPrice . "</p>";
	echo "<p>" . $numberOfToppings . " toppings per pizza". "</p>";
	echo "<p>" . "Prijs per topping: €" . $toppingPrice . "</p>";
	echo "<p>" . "Prijs aan pizza's: €" . $pizzaTotal . "</p>";
	echo "<p>" . "Prijs aan toppings: €" . $toppingTotal . "</p>";
	echo "<p>" . "Totaalprijs: €" . $total . "</p>";
	echo "<p>" . "Aantal slices per persoon: " . $slicesPerPerson . " slices" . "</p>";
	
	// Time: ?
	// Record: 6:59 Falco (2025)
	// Ready? Push to GIT!
	?>
	
    <a href="03-basic-operators.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="04-arrays.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>