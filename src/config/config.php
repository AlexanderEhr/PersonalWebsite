<?php

// Pfade zu HTML-Komponenten
define('TEMPLATE_PATH', __DIR__ . '/../views/templates/');
define('HEADER_PATH', TEMPLATE_PATH . 'header.php');
define('FOOTER_PATH', TEMPLATE_PATH . 'footer.php');

// Funktionspfade
define('HELPER_PATH', __DIR__ . '/../helpers/');
require_once HELPER_PATH . 'titelFunktion.php';

?>
