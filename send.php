<?php
$msg = $_POST["email"];
mail("ilona.kuusela@gmail.com", "[speksi-teaser] Haluan muistutuksen", $msg);
?>
