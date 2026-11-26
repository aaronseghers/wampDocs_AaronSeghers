<?php
/*
	PHP-TOETS — BESTANDEN 01 T.E.M. 13

	Tijd: 2 lesuren (richttijd: deel 1 = 45 min., deel 2 = 55 min.)

	DEEL 1 — ZONDER INTERNET OF EIGEN DOCUMENTATIE                  			/40
	Werk in dit bestand. Gebruik echo om resultaten te tonen waar gevraagd.
	Schrijf je code telkens onder de vraag. Bestaande code mag je aanvullen.

	DEEL 2 — MET INTERNET EN EIGEN DOCUMENTATIE                    				/30
	Je mag dit deel thuis afwerken als je niet klaar raakt, maar het
	thuis afgewerkte deel telt slechts gedeeltelijk mee (afspraak leerkracht).

	TOTAAL                                                               		/70
*/


//=1===================================================================
// Maak die variabelen met onderstaande waarden en toon telkens de
// waarde en het datatype in de browser
// - een kommagetal: 7,5
// - een tekst "PHP"
// - een 'true' value
// Maak daarna een variabele met de waarden "rood" en "blauw". 
// Toon ook deze data in de browser op een gepaste manier.
//=================================================================/5=

$float = 7.5;
$text = "PHP";
$bool = true;
$arr = ["Rood", "Blauw"];

echo $float . " & " . $text . " & " . $bool;

for($indx = 0; $indx < sizeof($arr); $indx++){
	echo "<p>" . $arr[$indx] . "</p>";
}

// OF echo var_dump($arr);

echo "<br>";
//=2===================================================================
// Bereken en toon:
// - de totale prijs
// - de prijs na een korting van 5 euro
// - de rest bij het delen van de totale prijs door 4
//=================================================================/4=
$prijs = 19;
$aantal = 3;

$totalePrijs = $prijs * $aantal;
$prijsMetKorting = $totalePrijs - 5;
$restVanPrijs = $totalePrijs % 4;

echo "<p> De totale prijs is: €" . $totalePrijs . "</p>";
echo "<p> De prijs na korting is: €" . $prijsMetKorting . "</p>";
echo "<p> De rest van de prijs gedeeld door 4 is: €" . $restVanPrijs . "</p>";

echo "<br>";
//=3===================================================================
// Maak een variabele .
// Toon "Toegang toegestaan" als de bezoeker MINSTENS 16 jaar is
// EN een ticket heeft. Toon anders "Toegang geweigerd".
// Toon daarna "Gratis toegang" wanneer de leeftijd kleiner dan 12
// OF groter dan of gelijk aan 65 is. Toon anders "Betalen".
//=================================================================/5=
$leeftijd = 17;
$heeftTicket = true;

if($heeftTicket = true){
	if($leeftijd >= 16){
		echo "<p>Toegang toegestaan</p>";
	}
	else{
		echo "<p>Toegang geweigerd</p>";
	}
}
else if($leeftijd < 12 || $leeftijd >= 65){
	echo "<p>Gratis toegang!</p>";
}
else{
	echo "<p>Betalen.</p>";
}

echo "<br>";
//=4===================================================================
// Gebruik de variabele en toon:
// - de waarde afgerond naar boven 
// - de waarde afgerond naar beneden
// - de waarde afgerond tot een geheel getal.
//=================================================================/3=
$getal = -8.7;

$absoluteGetal = abs($getal); // bonuspunt
$rondNaarBoven = ceil($getal);
$rondNaarOnder = floor($getal);
$geheelGetal = round($getal);
echo $absoluteGetal . " / " . $rondNaarBoven . " / " . $rondNaarOnder . " / " . $geheelGetal;

echo "<br>";
//=5===================================================================
// Gebruik een for-loop om de getallen 2, 4, 6, 8 en 10 te tonen.
// Gebruik daarna een foreach om alle waarden uit onderstaande
// array te tonen, telkens gevolgd door een spatie.
//=================================================================/5=
$kleuren = ["rood", "groen", "blauw"];

for($indx = 0; $indx <= 10; $indx++){
	if($indx % 2 == 0){
		echo "<p>" . $indx . "</p>";
	}
	
}

foreach ($kleuren as $kleur) {
	echo "<p>" . $kleur . "</p>";
}

echo "<br>";
//=6===================================================================
// Schrijf een functie berekenPrijs() die de totale prijs berekent
// Aan het einde stuurt deze met return de prijs terug.
// De functie ontvangt volgende data:
// - een prijs 
// - een aantal (fallback 1)
//
// Roep de functie tweemaal op:
// - met prijs 12 en aantal 4
// - met enkel prijs 9
//=================================================================/5=

function berekenPrijs($prijs, $aantal = 1){
	$totalePrijs = $prijs * $aantal;	
	return $totalePrijs;
}

echo "<p>" . berekenPrijs(12, 4) . "</p>";
echo "<p>" . berekenPrijs(9) . "</p>";

echo "<br>";
//=7===================================================================
// Met behulp van String functions;
// - Verwijder de spaties vooraan en achteraan.
// - Toon de tekst volledig in kleine letters.
// - Toon het aantal tekens van de tekst ZONDER de extra spaties.
// - Vervang "PHP" door "programmeren" en toon het resultaat.
//=================================================================/4=
$zin = "  Welkom bij PHP!  ";

// $zonderSpaties = $zonderSpaties.replace(" ", "");
// $kleineLetters = string.lowercase($zin);
$aantalTekens = string.count_chars($zin);
// $prog = string.replace("PHP", "Programmeren");

echo "<p>" . $zonderSpaties . " / " . $kleineLetters . " / " . $aantalTekens . " / " . $prog . "</p>";

echo "<br>";
//=8===================================================================
// Leg het verschil uit tussen GET en POST. 
// Toon hoe je de data kan ophalen en hoe je GET manueel kan meesturen.
//=================================================================/4=

// Bij GET neem je waarden op, die duidelijk zichtbaar zijn. Denk hierbij bijvoorbeeld aan een zoekbalk waarbij de waarde meegegeven word in de URL om dit makkelijk te kunnen delen.
// Bij POST neem je ook waarden op, maar deze blijven achterliggend geheim. Je kan ze dus niet zomaar zien (via bv de URl), maar kan er wel mee werken. Denk hierbij bijvoorbeeld aan een gebruikersnaam of een geheim wachtwoord.

// Voor data op te halen, gebruik je $_GET[(waarde)];
// Voor data manueel mee te sturen, kan je dus ook toevoegen aan de array die GET is -> $_GET[] = "(waarde)";