<?php
$title = 'Film Review Website';

ob_start();
include 'templated/home.html.php';
$output = ob_get_clean();

include 'templated/layout.html.php';
?>
