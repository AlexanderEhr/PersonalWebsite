<?php
/**
 * Funktion zur Bestimmung des Seitentitels
 *
 * Diese Funktion setzt den Titel der Seite basierend auf dem Namen der aktuellen Datei.
 *
 * @return string Der Titel der Seite.
 */
function getPageTitle() {
    $scriptName = basename($_SERVER['SCRIPT_FILENAME'], '.php');
    $titles = [
        'index' => 'Startseite',
        'about' => 'Über mich',
        'portfolio' => 'Portfolio',
        'contact' => 'Kontakt',
        'games'=> 'Games & Code',
        // Weitere Titel hier hinzufügen
    ];

    return isset($titles[$scriptName]) ? $titles[$scriptName] : 'Meine Webseite';
}
?>
