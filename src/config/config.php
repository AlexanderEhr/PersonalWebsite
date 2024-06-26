<?php

// Pfade zu HTML-Komponenten
define('TEMPLATE_PATH', __DIR__ . '/../views/templates/');
define('HEADER_PATH', TEMPLATE_PATH . 'header.php');
define('FOOTER_PATH', TEMPLATE_PATH . 'footer.php');

// Pfade zu CSS-Dateien
define('CSS_PATH', 'css/');
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
define('INSTAICON', IMAGE_PATH . 'istaicon.png');
define('GITHUBICON', IMAGE_PATH . 'githubicon.png');
define('WILLKOMMEN', IMAGE_PATH . 'willkommenlogo.png');
define('PROFILE_PICTURE', IMAGE_PATH . 'profilepicture.WebP');



// Pfade zu Videos
define('VID_PATH', 'video/');
define('TEST_VID', VID_PATH . 'infoaevid.mp4');


// Funktionspfade
define('HELPER_PATH', __DIR__ . '/../helpers/');
require_once HELPER_PATH . 'titelFunktion.php';
require_once HELPER_PATH . 'loadStyles.php';

?>
