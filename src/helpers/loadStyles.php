<?php

function loadStyles() {
    // Debugging-Ausgaben
    echo '<!-- ' . GLOBAL_CSS . ' -->';
    echo '<!-- ' . HEADER_CSS . ' -->';
    echo '<!-- ' . FOOTER_CSS . ' -->';
    echo '<!-- ' . STYLE_CSS . ' -->';

    // Verwenden Sie die bereits definierten Pfade aus der config.php
    echo '<link rel="stylesheet" href="' . GLOBAL_CSS . '">';
    echo '<link rel="stylesheet" href="' . HEADER_CSS . '">';
    echo '<link rel="stylesheet" href="' . FOOTER_CSS . '">';
    echo '<link rel="stylesheet" href="' . STYLE_CSS . '">'; // für den Übergang

    // Bedingte Einbindung von CSS-Dateien basierend auf der aktuellen Seite
    $scriptName = basename($_SERVER['SCRIPT_FILENAME'], '.php');
    switch ($scriptName) {
        case 'about':
            echo '<link rel="stylesheet" href="' . ABOUT_CSS . '">';
            break;
        case 'ausbildung':
            echo '<link rel="stylesheet" href="' . AUSBILDUNG_CSS . '">';
            break;
        case 'contact':
            echo '<link rel="stylesheet" href="' . CONTACT_CSS . '">';
            break;
        case 'games':
            echo '<link rel="stylesheet" href="' . GAMES_CSS . '">';
            break;
        case 'index':
            echo '<link rel="stylesheet" href="' . INDEX_CSS . '">';
            break;
        // Weitere Fälle für andere Seiten hinzufügen
    }
}

?>
