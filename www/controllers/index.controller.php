<?php
$title = "Home Page";

$stylesheets = ['normalize'];
$base_style = $_GET['mode'] ?? 'light-lemon';

if ($base_style == 'dark') {
    $base_style = 'dark-lemon';
}

$stylesheets[] = $base_style;

require path_to("views/index.view.php");
