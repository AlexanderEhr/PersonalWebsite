<?php
require_once __DIR__ . '/../src/config/config.php';
include HEADER_PATH;
?>

<main id="main-index-container" class="main-index-container">
    <div id="color-underlay" class="under-overlay"></div>
    <div id="main-container" class="main-container">
        <section id="welcome" class="welcome-section">
            <div class="welcome-container">
                <div class="profile-card">
                    <div class="profile-image">
                        <img src="<?php echo PROFILE_PICTURE; ?>" alt="Alexander Ehrlich">
                    </div>
                    <div class="profile-info">
                        <h2>Alexander Ehrlich</h2>
                        <p>Anwendungsentwickler<br>Certified Scrum Master</p>
                    </div>
                </div>
                <div class="welcome-text">
                    <h1>Hallo</h1>
                    <p>Wer ich bin & was ich mache</p>
                    <div class="action-buttons">
                        <a href="about.php" class="btn-primary">Über mich</a>
                        <a href="education.php" class="btn-secondary">Ausbildung</a>
                    </div>
                    <p class="welcome-description">Ich bin ein angehender Fachinformatiker für Anwendungsentwicklung, auf der Suche nach einem Praktikum in der IT-Branche, um meine Kenntnisse und Fähigkeiten in einem professionellen Umfeld zu vertiefen und wertvolle praktische Erfahrungen zu sammeln.</p>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
include FOOTER_PATH;
?>
