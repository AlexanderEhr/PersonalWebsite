<?php
require_once __DIR__ . '/../src/config/config.php';
include HEADER_PATH;
?>

<main>
    <section id="contact">
        <h2>Kontakt</h2>
        <p>Sie können mich über die folgenden Links erreichen oder meine PDFs herunterladen.</p>
        
        <div id="contact-links">
            <h3>Online-Profile</h3>
            <ul>
                <li><a href="https://github.com/AlexanderEhr" target="_blank">Mein GitHub-Profil</a></li>
                <!-- Weitere Online-Profile hier hinzufügen -->
            </ul>
        </div>

        <div id="downloads">
            <h3>Downloads</h3>
            <ul>
                <li><a href="path/to/pdf1.pdf" download="pdf1.pdf">Lebenslauf</a></li>
                <li><a href="path/to/pdf2.pdf" download="pdf2.pdf">Zertifikate</a></li>
                <!-- Weitere PDFs hier hinzufügen -->
            </ul>
        </div>
    </section>
</main>

<?php
include FOOTER_PATH;
?>
