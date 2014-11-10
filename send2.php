<?php
$msg = "Nimi: " . $_POST["name"] . "\n";
$msg = $msg . "Email: " . $_POST["email"] . "\n";
$msg = $msg . "Kiinnostus: " . $_POST["interest"] . "\n";
mail("ilona.kuusela@gmail.com", "[speksi-teaser] Minua kiinnostaa", $msg);
?>
