<?php
$msg = "Nimi: " . $_POST["name"] . "\n";
$msg = $msg . "Email: " . $_POST["email"] . "\n";
$msg = $msg . "Kiinnostus: " . $_POST["interest"] . "\n";
mail("henri.pihkala@iki.fi", "[speksi-teaser] Minua kiinnostaa", $msg);
?>
