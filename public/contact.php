<?php
require_once __DIR__ . '/../src/config/config.php';
include HEADER_PATH;
?>

<main id="main-contact-container" class="main-contact-container">
    <div id="headline-contact" class="contact-main-headline">
        <span class="contact-blue-square"></span>
        <h2>Kontakt</h2>
    </div>

    <section id="contact" class="contact-section">
        <div class="contact-container">
            <form action="contact.php" method="POST" class="contact-form">
                <div class="form-group">
                    <article id="email" class="email">
                        <h3>E-Mail</h3>
                        <p>alexander.ehrlich@icloud.com</p>
                    </article>
                </div>
                <div class="form-group">
                    <article id="telefon" class="telefon">
                        <h3>Telefon</h3>
                        <p>+49(0)1724476258</p>
                    </article>
                </div>
                <div class="form-group">
                    <article id="socials" class="socials">
                        <h3>Socials</h3>
                        <div class="social-icons">
                            <div id="instaicon" class="social-icons-insta">
                                <a href="https://www.instagram.com/alexander_ehr/" target="_blank">
                                    <img src="<?= INSTAICON ?>" alt="Instagram">
                                </a>
                            </div>
                            <div id="githubicon" class="social-icons-github">
                                <a href="https://github.com/AlexanderEhr" target="_blank">
                                    <img src="<?= GITHUBICON ?>" alt="GitHub">
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </form>
        </div>
    </section>
</main>

<?php
include FOOTER_PATH;
?>
