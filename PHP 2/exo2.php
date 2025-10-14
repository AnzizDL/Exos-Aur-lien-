<?php

const TAUX_TVA = 0.2;
$prixHT = "100";
$prixTTC = ($prixHT * TAUX_TVA) + $prixHT;

echo "le prix est de $prixTTC";
?>