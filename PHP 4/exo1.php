<?php
$role = "visiteur";
if ($role == "admin") {
    echo "accès complet autorisé";
} elseif ($role == "éditeur"){
    echo "accès limité aux modifications";

}


