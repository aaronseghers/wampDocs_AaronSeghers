<?php
//=9===================================================================
//
// DEEL 2 — GROTE OPDRACHT: GTA VI — VICE CITY RENTALS
// Je ontwikkelt een eenvoudige autoverhuurwebsite in het fictieve Vice City.
// Internet en eigen documentatie zijn toegestaan.
//
// --------------------------------------------------
//
// Een toerist wil een voertuig huren om Vice City te verkennen.
// Maak een HTML-formulier met:
// - naam van de klant (tekstveld)
// - aantal huurdagen (getalveld)
// - voertuigtype (select: scooter, SUV of sportwagen)
// - promotiecode (tekstveld, mag leeg blijven)
// - verzendknop; gebruik POST
//
// HUURPRIJZEN PER DAG:
// scooter: 35 euro
// SUV: 80 euro
// sportwagen: 120 euro
// Promotiecode "VICE10": 10% korting op de totale huurprijs.
// Andere codes leveren geen korting op.
//
// NA VERZENDING toon je een huuroverzicht met:
// - een begroeting met de naam van de klant
// - het gekozen voertuig en het aantal huurdagen
// - de huurprijs per dag
// - de totale prijs voor de korting
// - de korting (indien van toepassing) en de eindprijs
// - de melding "Lange roadtrip!" bij minstens 7 huurdagen,
//   anders "Veel plezier in Vice City!"
//
// TECHNISCHE EISEN:
// - Maak een functie dagPrijs($voertuig) die met return de
//   juiste huurprijs per dag teruggeeft.
// - Maak een functie berekenHuur($dagprijs, $dagen, $korting = 0)
//   die de eindprijs berekent en teruggeeft met return.
//   $korting stelt het kortingspercentage voor (0 of 10).
// - Gebruik minstens één if/else (of elseif).
// - Gebruik een foreach-lus om de voertuigen uit de array hieronder
//   als <option> in het formulier te tonen.
// - Gebruik minstens één stringfunctie op de ingevoerde naam
//   of promotiecode (bv. trim() of strtoupper()).
// - Rond de getoonde bedragen af op 2 cijfers na de komma.
// - De pagina moet ook zonder POST-verzending kunnen openen.
//
// PUNTENVERDELING:
// Formulier + verwerking via POST                         			/6
// Voertuigkeuze opgebouwd met foreach                     			/4
// Functie dagPrijs() + correcte prijs                     			/4
// Functie berekenHuur() + fallback + return               			/5
// Promotiecode en korting correct toegepast               			/4
// Huuroverzicht + roadtripmelding + stringfunctie         			/5
// Bedragen afgerond op 2 decimalen                        			/2
//==================================================================/30=

$voertuigen = ["scooter", "SUV", "sportwagen"];