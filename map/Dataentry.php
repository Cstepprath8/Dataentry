<?php 

// Colin Stepprath

// Vraag om de gegevens in te voeren
$week = readline("Wat is de week: ");
$omschrijving = readline("Geef een omschrijving van de werkzaamheden: ");
$projectnaam = readline("Wat is het project naam: ");
$aantalUren = readline("Vul de aantal uren in: ");

// Bestandspad voor de CSV
$file = "C:\School map\SmoelenBoek\Dataentry\dataentry.csv";

$handle = fopen($file, "a+");

if ($handle !== false) {
    // Schrijf de gegevens in CSV-formaat
    fputcsv($handle, [$week, $omschrijving, $projectnaam, $aantalUren]);
    fclose($handle);

}

echo readfile("dataentry.csv");

?>