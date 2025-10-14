<?php 

$x = true;
$y = false;

echo "le resultat est : " . (($x && $y) ? "true" : "false") . "<br>";
echo "le resultat est : " . (($x || $y) ?"true" : "false") . "<br>";
echo "le resultat est : " . (($x xor $y) ? "true" : "false") . "<br>";

?>
