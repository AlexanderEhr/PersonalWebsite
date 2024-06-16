<?php
require_once __DIR__ . '/../src/config/config.php';
include HEADER_PATH;

// Formularverarbeitung
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vorname = htmlspecialchars(trim($_POST["vorname"]));
    $nachname = htmlspecialchars(trim($_POST["nachname"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $betreff = htmlspecialchars(trim($_POST["betreff"]));
    $nachricht = htmlspecialchars(trim($_POST["nachricht"]));

    $datei_pfad = __DIR__ . '/../data/messages.txt'; // Pfad zur Datei

    $eintrag = "Vorname: $vorname\nNachname: $nachname\nE-Mail: $email\nBetreff: $betreff\nNachricht: $nachricht\n\n";

    file_put_contents($datei_pfad, $eintrag, FILE_APPEND);

    echo "<script>alert('Ihre Nachricht wurde erfolgreich gesendet.'); window.location.href='contact.php';</script>";
}

?>

<main>
        <div id="headline-contact" class="contact-main-headline">
            <span class="contact-blue-square"></span>
            <h2>Kontakt</h2>
        </div>
    
    <section id="contact" class="contact-section">
        <div class="contact-container">
        <form action="contact.php" method="POST" class="contact-form">
            <div class="form-group">
                <label for="vorname">Vorname *</label>
                <input type="text" name="vorname" id="vorname" required>
            </div>
            <div class="form-group">
                <label for="nachname">Nachname *</label>
                <input type="text" name="nachname" id="nachname" required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail *</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="betreff">Betreff</label>
                <input type="text" name="betreff" id="betreff">
            </div>
            <div class="form-group">
                <label for="nachricht">Nachricht</label>
                <textarea name="nachricht" id="nachricht" rows="5"></textarea>
            </div>
            <button type="submit">Absenden</button>
        </form>
            
        </div>
    </section>
</main>

<?php
include FOOTER_PATH;
?>
