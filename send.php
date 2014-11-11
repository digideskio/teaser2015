<?php
$msg = $_POST["email"];
mail("pihla.melander@teekkarispeksi.fi, essi.puustinen@aalto.fi", "[speksi-teaser] Haluan muistutuksen lipunmyynnin alkamisesta", $msg);
?>
