<?php

// Pfade zu HTML-Komponenten
define('TEMPLATE_PATH', __DIR__ . '/../views/templates/');
define('HEADER_PATH', TEMPLATE_PATH . 'header.php');
define('FOOTER_PATH', TEMPLATE_PATH . 'footer.php');

// Pfade zu CSS-Dateien
define('CSS_PATH', 'css/styles/');
define('GLOBAL_CSS', CSS_PATH . 'global.css');
define('HEADER_CSS', CSS_PATH . 'header.css');
define('FOOTER_CSS', CSS_PATH . 'footer.css');
define('ABOUT_CSS', CSS_PATH . 'about.css');
define('EDUCATION_CSS', CSS_PATH . 'education.css');
define('CONTACT_CSS', CSS_PATH . 'contact.css');
define('GAMES_CSS', CSS_PATH . 'games.css');
define('INDEX_CSS', CSS_PATH . 'index.css');

// Pfade zu Bildern
define('IMAGE_PATH', 'images/');
define('PROBEBILD_01', IMAGE_PATH . 'probebild1.png');
define('PROBEBILD_02', IMAGE_PATH . 'probebild2.png');
define('WILLKOMMEN', IMAGE_PATH . 'willkommenlogo.png');
define('PROFILE_PICTURE', IMAGE_PATH . 'profilepicture2.jpg');

// Funktionspfade
define('HELPER_PATH', __DIR__ . '/../helpers/');
require_once HELPER_PATH . 'titelFunktion.php';
require_once HELPER_PATH . 'loadStyles.php';

?>
