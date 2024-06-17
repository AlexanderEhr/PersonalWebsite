<?php
require_once __DIR__ . '/../src/config/config.php';
include HEADER_PATH;
?>

<main>
    <section id="about" class="about-section">
        <h2>Über mich</h2>
        <p>Hier finden Sie Informationen über meine Erfahrungen und meine Karriere.</p>

        <div class="about-container">
            <!-- Bereich für Kommentare und Lob -->
            <section id="feedback" class="about-category">
                <h3>Kommentare und Lob</h3>
                <p>Hier werde ich Kommentare und Lob von alten Arbeitgebern und Freunden zeigen.</p>
                <!-- Beispielkommentar -->
                <article class="feedback-item">
                    <blockquote>
                        <p>"Alexander ist ein äußerst talentierter und engagierter Entwickler. Seine Arbeitsethik und Fähigkeiten sind außergewöhnlich."</p>
                        <footer>- Ehemaliger Arbeitgeber</footer>
                    </blockquote>
                </article>
                <!-- Weitere Kommentare hier hinzufügen -->
            </section>

            <!-- Bereich für meinen Werdegang -->
            <section id="career" class="about-category">
                <h3>Mein Werdegang</h3>
                <p>In diesem Abschnitt werde ich über meine beruflichen Erfahrungen und meinen Karriereweg schreiben.</p>
                <!-- Beispiel für beruflichen Werdegang -->
                <article class="career-item">
                    <h4>Softwareentwickler bei XYZ GmbH</h4>
                    <p>Januar 2019 - Heute</p>
                    <p>In dieser Rolle bin ich für die Entwicklung und Wartung von Webanwendungen verantwortlich.</p>
                </article>
                <!-- Weitere Stationen hier hinzufügen -->
            </section>

            <!-- Bereich für Hobbys -->
            <section id="hobbies" class="about-category">
                <h3>Hobbys</h3>
                <p>In meiner Freizeit beschäftige ich mich mit verschiedenen Aktivitäten, die ich hier vorstellen werde.</p>
                <!-- Beispielhobby -->
                <article class="hobby-item">
                    <h4>Fotografie</h4>
                    <p>Ich liebe es, in meiner Freizeit zu fotografieren und Momente festzuhalten.</p>
                </article>
                <!-- Weitere Hobbys hier hinzufügen -->
            </section>
        </div>
    </section>
</main>

<?php
include FOOTER_PATH;
?>
