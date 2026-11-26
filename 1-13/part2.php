<!--
=9===================================================================
DEEL 2 — GROTE OPDRACHT: GTA VI — VICE CITY RENTALS
Je ontwikkelt een eenvoudige autoverhuurwebsite in het fictieve Vice City.
Internet en eigen documentatie zijn toegestaan.

--------------------------------------------------

Een toerist wil een voertuig huren om Vice City te verkennen.
Maak een HTML-formulier met:
[v] naam van de klant (tekstveld)
[v] aantal huurdagen (getalveld)
[v] voertuigtype (select: scooter, SUV of sportwagen)
[v] promotiecode (tekstveld, mag leeg blijven)
[v] verzendknop; gebruik POST -->

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vice City Rentals</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
  <!-- Formulier -->

  <form action="" method="post">
    <label for="naam">Naam:</label>
    <input type="text" name="naam" id="naam" required>
    <br>
    <label for="aantalHuurDagen">Aantal Huurdagen:</label>
    <input type="number" name="aantalHuurDagen" id="aantalHuurDagen" min="1" required>
    <br>
    <label for="voertuigType">Voertuigtype:</label>
    <select id="voertuigType" name="voertuigType">
      <?php
      $voertuigen = [
        "scooter",
        "SUV",
        "sportwagen"
      ];

      foreach ($voertuigen as $voertuig) {
        echo "<option value='$voertuig'>$voertuig</option>";
      }
      ?>
    </select>
    <br>
    <label for="promoCode">Promotiecode:</label>
    <input type="text" name="promoCode" id="promoCode">
    <br>
    <input type="submit" value="Verzenden">
  </form>

  <?php

  // HUURPRIJZEN PER DAG:
  // scooter: 35 euro
  // SUV: 80 euro
  // sportwagen: 120 euro
  // Promotiecode "VICE10": 10% korting op de totale huurprijs.
  // Andere codes leveren geen korting op.

  // FUNCTIES

  function dagPrijs($voertuig) {
    if ($voertuig == "scooter") {
      return 35;
    } elseif ($voertuig == "SUV") {
      return 80;
    } elseif ($voertuig == "sportwagen") {
      return 120;
    } else {
      return 0;
    }
  }
  
  function berekenHuur($dagprijs, $dagen, $korting = 0) {
    $totaal = $dagprijs * $dagen;
    $eindprijs = $totaal - ($totaal * $korting / 100);
    return $eindprijs;
  }

  // DISPLAY

    $naam = htmlspecialchars(trim($_POST["naam"]));
    $aantalHuurDagen = (int) $_POST["aantalHuurDagen"];
    $voertuigType = htmlspecialchars($_POST["voertuigType"]);
    $promoCode = strtoupper(trim($_POST["promoCode"]));

    $huurPrijs = dagPrijs($voertuigType);

    $totalePrijs = berekenHuur($huurPrijs, $aantalHuurDagen);

    if ($promoCode == "VICE10") {
      $kortingProcent = 10;
    } else {
      $kortingProcent = 0;
    }

    $eindPrijs = berekenHuur($huurPrijs, $aantalHuurDagen, $kortingProcent);
    $kortingInEuro = $totalePrijs - $eindPrijs;

    if ($aantalHuurDagen >= 7) {
      $melding = "Lange roadtrip!";
    } else {
      $melding = "Veel plezier in Vice City!";
    }

    echo "<br>";
    echo "Hallo " . $naam . ", welkom bij Vice City Rentals!";
    echo "<br>";

    if ($aantalHuurDagen == 1) {
      echo "Je koos een " . $voertuigType . " voor " . $aantalHuurDagen . " dag.";
    } else {
      echo "Je koos een " . $voertuigType . " voor " . $aantalHuurDagen . " dagen.";
    }
    echo "<br>";

    echo "Huurprijs per dag: €" . number_format($huurPrijs, 2, ",", ".");
    echo "<br>";
    echo "Totale prijs voor korting: €" . number_format($totalePrijs, 2, ",", ".");
    echo "<br>";

    if ($kortingProcent > 0) {
      echo "Korting (" . $kortingProcent . "%): €" . number_format($kortingInEuro, 2, ",", ".");
      echo "<br>";
    }

    echo "------------------------------";
    echo "<br>";
    echo "Eindprijs: €" . number_format($eindPrijs, 2, ",", ".");
    echo "<br>";
    echo $melding;

  ?>
</body>

</html>

<?php

// NA VERZENDING toon je een huuroverzicht met:
// [v] een begroeting met de naam van de klant
// [v] het gekozen voertuig en het aantal huurdagen
// [v] de huurprijs per dag
// [v] de totale prijs voor de korting
// [v] de korting (indien van toepassing) en de eindprijs
// [v] de melding "Lange roadtrip!" bij minstens 7 huurdagen,
//   anders "Veel plezier in Vice City!"

// CHECKLIST technische eisen:
// [v] Maak een functie dagPrijs($voertuig) die met return de
//   juiste huurprijs per dag teruggeeft.
// [v] Maak een functie berekenHuur($dagprijs, $dagen, $korting = 0)
//   die de eindprijs berekent en teruggeeft met return.
//   $korting stelt het kortingspercentage voor (0 of 10).
// [v] Gebruik minstens één if/else (of elseif).
// [v] Gebruik een foreach-lus om de voertuigen uit de array hieronder
//   als <option> in het formulier te tonen.
// [v] Gebruik minstens één stringfunctie op de ingevoerde naam
//   of promotiecode (bv. trim() of strtoupper()).
// [v] Rond de getoonde bedragen af op 2 cijfers na de komma.
// [v] De pagina moet ook zonder POST-verzending kunnen openen.

// PUNTENVERDELING:
// Formulier + verwerking via POST                                              /6
// Voertuigkeuze opgebouwd met foreach                                          /4
// Functie dagPrijs() + correcte prijs                                          /4
// Functie berekenHuur() + fallback + return                                    /5
// Promotiecode en korting correct toegepast                                    /4
// Huuroverzicht + roadtripmelding + stringfunctie                              /5
// Bedragen afgerond op 2 decimalen                                             /2
//==================================================================/30=

?>
