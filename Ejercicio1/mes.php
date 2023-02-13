<?php
date_default_timezone_set("Spain/Madrid");
$mes = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "noviembre", "diciembre"][date("n") - 1];
echo $mes;
?>