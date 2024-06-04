<?php
require_once __DIR__ . '/../src/config/config.php';
include HEADER_PATH;
?>

<main>
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
        </div>
    </section>
</main>

<?php
include FOOTER_PATH;
?>
