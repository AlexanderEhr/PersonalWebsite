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

    $datei_pfad = 'data/messages.txt'; // Pfad zur Datei

    // Zusammenstellen der Nachrichtendaten in einem Array
    $neue_nachricht = [
        'id' => uniqid(),  // Generiert eine eindeutige ID
        'vorname' => $vorname,
        'nachname' => $nachname,
        'email' => $email,
        'betreff' => $betreff,
        'nachricht' => $nachricht,
        'datum' => date("Y-m-d H:i:s")  // Datum und Zeit der Nachricht
    ];

     // Überprüfen, ob die Datei existiert und Nachrichten darin speichern
     try {
        if (file_exists($datei_pfad)) {
            // Lesen und Entschlüsseln der gespeicherten Daten
            $daten = unserialize(file_get_contents($datei_pfad));
            // Hinzufügen der neuen Nachricht zum Array
            $daten[] = $neue_nachricht;
            // Speichern der aktualisierten Daten in der Datei
            file_put_contents($datei_pfad, serialize($daten));
        } else {
            // Erstellen der Datei und Speichern der ersten Nachricht, falls die Datei noch nicht existiert
            file_put_contents($datei_pfad, serialize([$neue_nachricht]));
        }

        echo "<script>alert('Ihre Nachricht wurde erfolgreich gesendet.'); window.location.href='contact.php';</script>";
    } catch (Exception $e) {
        echo "Fehler beim Speichern der Nachricht: ",  $e->getMessage(), "\n";
    }
}

?>

<main>
<<<<<<< HEAD
<<<<<<< HEAD
    <div class="contact-header">
        <h2>Kontakt</h2>
        <p>Sie können mich über die folgenden Links erreichen oder meine PDFs herunterladen.</p>
    </div>
    
    <section id="contact" class="contact-section">
        <!-- Container für die neuen Elemente -->
        <div class="contact-container">
            <!-- Erste Box -->
            <div class="contact-box" id="online-profile" tabindex="0">
                <div class="contact-box-layer contact-box-front">
                    <div class="contact-box-overlay">
                        <div class="contact-box-inner">
                        <img src="<?php echo PROBEBILD_01; ?>" alt="Online Profile Image" class="contact-box-image">    
                        </div>
                    </div>
                </div>
                <div class="contact-box-layer contact-box-back">
                    <div class="contact-box-overlay">
                        <div class="contact-box-inner">
                            <h3 class="contact-box-title">Online-Profile</h3>
                            <div class="contact-box-description">
                                <ul>
                                    <li><a href="https://github.com/AlexanderEhr" target="_blank">Mein GitHub-Profil</a></li>
                                    <!-- Weitere Online-Profile hier hinzufügen -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Zweite Box -->
            <div class="contact-box" id="downloads" tabindex="0">
                <div class="contact-box-layer contact-box-front">
                    <div class="contact-box-overlay">
                        <div class="contact-box-inner">
                            <img src="<?php echo PROBEBILD_02; ?>" alt="Online Profile Image" class="contact-box-image">
                            
                        </div>
                    </div>
                </div>
                <div class="contact-box-layer contact-box-back">
                    <div class="contact-box-overlay">
                        <div class="contact-box-inner">
                            <h3 class="contact-box-title">Downloads</h3>
                            <div class="contact-box-description">
                                <ul>
                                    <li><a href="path/to/pdf1.pdf" download="pdf1.pdf">Lebenslauf</a></li>
                                    <li><a href="path/to/pdf2.pdf" download="pdf2.pdf">Zertifikate</a></li>
                                    <!-- Weitere PDFs hier hinzufügen -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
=======
=======
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752
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
            
<<<<<<< HEAD
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752
=======
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752
        </div>
    </section>
</main>

<?php
include FOOTER_PATH;
?>
