<?php
$paragrafo = $_POST['paragrafo'];
$censura = $_POST['censura'];

// stampa il paragrafo originale e la sua lunghezza
echo "Paragrafo originale: $paragrafo" . " ";
echo "Lunghezza: " . strlen($paragrafo) . " ";

// sostituisci con ***
$paragrafoCensurato = str_replace($censura, '***', $paragrafo);

// stampa il paragrafo censurato e la sua lunghezza
echo "Paragrafo censurato: $paragrafoCensurato" . " ";
echo "Lunghezza: " . strlen($paragrafoCensurato);
