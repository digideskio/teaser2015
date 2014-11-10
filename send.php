<?php
$msg = $_POST["email"];
mail("henri.pihkala@iki.fi", "[speksi-teaser] Haluan muistutuksen", $msg);
?>
