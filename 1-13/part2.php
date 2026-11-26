<!-- 
=9===================================================================
DEEL 2 — GROTE OPDRACHT: GTA VI — VICE CITY RENTALS
Je ontwikkelt een eenvoudige autoverhuurwebsite in het fictieve Vice City.
Internet en eigen documentatie zijn toegestaan.

--------------------------------------------------

Een toerist wil een voertuig huren om Vice City te verkennen.
Maak een HTML-formulier met:
[] naam van de klant (tekstveld)
[] aantal huurdagen (getalveld)
[] voertuigtype (select: scooter, SUV of sportwagen)
[] promotiecode (tekstveld, mag leeg blijven)
[] verzendknop; gebruik POST -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
	<!-- Formulier -->

	<form action="" method="post">
	<label for="naam">Naam:</label>
	<input type="text" name="naam" id="naam">
	<br>
	<label for="aantalHuurDagen">Aantal Huurdagen:</label>
	<input type="number" name="aantalHuurDagen" id="aantalHuurDagen">
	<br>
	<label for="voertuigType">Voertuigtype:</label>
	<select id="voertuigType" name="voertuigType" size="1">
		<?php foreach ($voertuigen as $voertuig) {
			echo "<option value='$voertuig'>$voertuig</option>";
		};
		?>
	</select>
	<br>
	<label for="promoCode">Promotiecode:</label>
	<input type="text" name="promoCode" id="promoCode">
	
	<br>
	<input type="submit" value="Submit">
	<br>
</body>

</html>

<?php



// HUURPRIJZEN PER DAG:
// scooter: 35 euro
// SUV: 80 euro
// sportwagen: 120 euro
// Promotiecode "VICE10": 10% korting op de totale huurprijs.
// Andere codes leveren geen korting op.

$voertuigen = [
	"scooter",
	"SUV",
	"sportwagen"];

$prijzen = [
	"undefined" => 0,
	"scooter" => 35,
	"SUV" => 80,
	"sportwagen" => 120];
$promoCodes = [
	"VICE10" => 10
];

// NA VERZENDING toon je een huuroverzicht met:
// [] een begroeting met de naam van de klant
// [] het gekozen voertuig en het aantal huurdagen
// [] de huurprijs per dag
// [] de totale prijs voor de korting
// [] de korting (indien van toepassing) en de eindprijs
// [] de melding "Lange roadtrip!" bij minstens 7 huurdagen,
//   anders "Veel plezier in Vice City!"

// IF (is empty) handling

if(isset($_POST["naam"])){
	$naam = $_POST["naam"];
}
else{
	$naam = "";
}
if(isset($_POST["aantalHuurDagen"])){
	$aantalHuurDagen = $_POST["aantalHuurDagen"];
}
else{
	$aantalHuurDagen = 0;
}
if(isset($_POST["voertuigType"])){
	$voertuigType = $_POST["voertuigType"];
}
else{
	$voertuigType = "undefined";
}
if(isset($_POST["promoCode"]) && $_POST["promoCode"] !== ""){
	$promoCode = $_POST["promoCode"];
}
else{
	$promoCode = "undefined";
}

// DISPLAY

echo "<br>";
echo "Hallo " . $naam . ", welkom bij Vice City Rentals!";
echo "<br>";
if($aantalHuurDagen == 1){
	echo "Je koos een voertuig type " . $voertuigType . " voor " . $aantalHuurDagen . " dag.";
}
else{
	echo "Je koos een voertuig type " . $voertuigType . " voor " . $aantalHuurDagen . " dagen.";
}
echo "<br>";
$huurPrijs = $prijzen[$voertuigType];
echo "De huurprijs per dag bedraagt €" . $huurPrijs;
echo "<br>";
if($aantalHuurDagen > 0){
	$totalePrijs = round(($aantalHuurDagen * $huurPrijs), 2);
}
else{
	$totalePrijs = 0;
}
echo "De totale kost bedraagt: €" . $totalePrijs;
echo "<br>";
$kortingValue = $promoCodes[$promoCode] ?? 0;
$korting = ($kortingValue / 100);
$kortingInEuro = round(($korting * $totalePrijs), 2);
if($kortingValue != 0){
	echo "Je krijgt €" . $kortingInEuro . " korting!";
}
$totaalMinKorting = $totalePrijs - $kortingInEuro;

echo "<br>";
echo "------------------------------";
echo "<br>";
echo "Je moet in totaal €" . $totaalMinKorting . " betalen.";




// CHECKLIST technische eisen:
// [] Maak een functie dagPrijs($voertuig) die met return de
//   juiste huurprijs per dag teruggeeft.
// [] Maak een functie berekenHuur($dagprijs, $dagen, $korting = 0)
//   die de eindprijs berekent en teruggeeft met return.
//   $korting stelt het kortingspercentage voor (0 of 10).
// [] Gebruik minstens één if/else (of elseif).
// [] Gebruik een foreach-lus om de voertuigen uit de array hieronder
//   als <option> in het formulier te tonen.
// [] Gebruik minstens één stringfunctie op de ingevoerde naam
//   of promotiecode (bv. trim() of strtoupper()).
// [] Rond de getoonde bedragen af op 2 cijfers na de komma.
// [] De pagina moet ook zonder POST-verzending kunnen openen.



// PUNTENVERDELING:
// Formulier + verwerking via POST                         			/6
// Voertuigkeuze opgebouwd met foreach                     			/4
// Functie dagPrijs() + correcte prijs                     			/4
// Functie berekenHuur() + fallback + return               			/5
// Promotiecode en korting correct toegepast               			/4
// Huuroverzicht + roadtripmelding + stringfunctie         			/5
// Bedragen afgerond op 2 decimalen                        			/2
//==================================================================/30=

// $voertuigen = [
// 	['scooter', 35],
// 	['SUV', 80],
// 	['sportwagen', 120],
// ];

?>