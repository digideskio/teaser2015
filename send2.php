<?php
$msg = "Nimi: " . $_POST["name"] . "\n";
$msg = $msg . "Email: " . $_POST["email"] . "\n";
$msg = $msg . "Kiinnostus: " . $_POST["interest"] . "\n";
mail("tuottajat@teekkarispeksi.fi", "[speksi-teaser] Rekry", $msg);
?>
