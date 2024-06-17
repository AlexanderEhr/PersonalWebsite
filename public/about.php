<?php
require_once __DIR__ . '/../src/config/config.php';
include HEADER_PATH;


?>

<main>
    <section id="about" class="about-section">
<<<<<<< HEAD
<<<<<<< HEAD
        <h2>Über mich</h2>
        <p>Hier finden Sie Informationen über meine Erfahrungen und meine Karriere.</p>
=======
=======
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752
        <div id="headline-about" class="about-main-headline">
            <span class="about-blue-square"></span>
            <h2>Über mich</h2>
        </div>
        
        
        <div id="videoTest" class="video-container">
            <video controls width="600" alt="Kurze vorstellung">
                <source src="<?php echo TEST_VID; ?>" type="video/mp4">
            </video>
        </div>
<<<<<<< HEAD
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752
=======
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752

        <div class="about-container">
            <!-- Bereich für Kommentare und Lob -->
            <section id="feedback" class="about-category">
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752
                <h3><strong>Kommentare</strong></h3>
                <p>Was ehemalige Arbeitgeber über mich sagen.</p>
                <!-- Beispielkommentar -->
                <article class="feedback-item">
                    <blockquote>
                        <p>"Wir haben Herrn Ehrlich als stets ehrlichen, fleißigen und pünktlichen Mitarbeiter kennengelernt.
                            Er ging seiner Tätigkeit zuverlässig, verantwortungsbewusst und mit großer Einsatzfreude nach.
                            Aufgrund seines Fachwissens, seiner Kollegialität und seiner Hilfsbereitschaft war er bei Vorgesetzten und Kollegen anerkannt und beliebt.
                            Auch bei unseren Kunden genoss er wegen seiner Kompetenz und seines aufgeschlossenen und zugleich verbindlichen Auftretens hohes Ansehen.
                            Unser Unternehmen wurde von ihm stets vorbildlich repräsentiert."</p>
                        <footer>- ENGBERS GmbH & Co. KG</footer>
                    </blockquote>
                </article>

                <article class="feedback-item">
                    <blockquote>
                        <p>"Sein Arbeitsgebiet beherrschte er jederzeit fachlich souverän und kannte sich mit den Prozessen und Gegebenheiten des Unternehmens gut aus.
                            Er bildete sich in Eigeninitiative und mit sehr guten Ergebnissen beruflich weiter und hielt sein hohes technisches Fachwissen immer auf dem neuesten Stand.
                            Auch seine Arbeitsergebnisse waren bei wechselnden Anforderungen und unter Zeitdruck von hoher Qualität."</p>
                        <footer>- Porsche Leipzig GmbH</footer>
                    </blockquote>
                </article>
                
            </section>

            <!-- Bereich für meinene Ausbildung -->
            <section id="career" class="about-category">
                <h2><strong>Ausbildung</strong></h2>
               
                <article class="career-item">
                    <h3><strong>Umschulung zum Fachinformatiker Anwendungsentwicklung</strong></h3>
                    <p><strong>CBW College Berufliche Weiterbildung GmbH, Hamburg</strong></p>
                    <p>Seit 05/2023 - Heute</p>
                    <p>Relationale Datenbanken/SQL, Hardware, Cloud Computing, Scrum, Python, Java, php, HTML-CSS und Javascript <br>
                        • Zertifikate: Scrum Master PSM 1 von Scrum.org. Vrstl. PCAP™ Certified Associate Python Programmer. Vrstl. AWS Certified Cloud Practitioner.
                        Vrstl. Exam 1Z0-811: Java Foundations</p>
                </article>
                
                <article class="career-item">
                    <h3><strong>Bachelorstudiengang Fahrzeugbau</strong></h3>
                    <p><strong>Hochschule für Angewandte Wissenschaften Hamburg</strong></p>
                    <p>2016 - 2018</p>
                    <p>Grundstudium <br> • Technisches Zeichnen, CAD Siemens NX</p>
                </article>
                <article class="career-item">
                    <h3><strong>Fachhochschulreife</strong></h3>
                    <p><strong>BBS Stadthagen Fachoberschule Gestaltung</strong></p>
                    <p>2010 - 2011</p>
                    <p>Fachabitur, Gestaltungsproduckte präsentieren <br> • Gestalterische Prozesse Planen</p>
                </article>
                <article class="career-item">
                    <h3><strong>Berufsausbildung zum Fahrzeuglackierer</strong></h3>
                    <p><strong>Sasse GmbH</strong></p>
                    <p>2010 - 2011</p>
                    <p>IHK-Abschluss <br> • Inhalte Berufsausbildung</p>
                </article>
            </section>

            <!-- Bereich für meinene Arbeitserfahrung -->
            <section id="career" class="about-category">
                <h2><strong>Arbeitserfahrung</strong></h2>
                
                <article class="career-item">
                <h3><strong>Verkaufstellenverwalter Deutschlandweit</strong></h3>
                    <p><strong>Engbers GmbH & Co. KG</strong></p>
                    <p>2018 - 2022</p>
                    <p>• Planung und Erreichung von Umsatzzielen, Mitarbeitercoaching, Führung von Teams 3-5 Personen <br>
                        • Beratung und Verkauf von hochwertigen Textilprodukten <br>
                        • Personaleinsatzplanung</p>
                </article>
                
                <article class="career-item">
                <h3><strong>Automobilfertiger</strong></h3>
                    <p><strong>Porsche Leipzig GmbH</strong></p>
                    <p>2014 - 2016</p>
                    <p>• Montagearbeiten, Fahrzeugfinish, Lacknacharbeit</p>
                </article>
                <article class="career-item">
                <h3><strong>Automobilfertiger</strong></h3>
                    <p><strong>Volkswagen Nutzfahrzeuge Hannover</strong></p>
                    <p>2012 - 2014</p>
                    <p>• Montagearbeiten, Fahrzeugfinish, Lacknacharbeit</p>
                </article>
<<<<<<< HEAD
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752
=======
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752
            </section>

            <!-- Bereich für Hobbys -->
            <section id="hobbies" class="about-category">
<<<<<<< HEAD
<<<<<<< HEAD
                <h3>Hobbys</h3>
                <p>In meiner Freizeit beschäftige ich mich mit verschiedenen Aktivitäten, die ich hier vorstellen werde.</p>
                <!-- Beispielhobby -->
                <article class="hobby-item">
                    <h4>Fotografie</h4>
                    <p>Ich liebe es, in meiner Freizeit zu fotografieren und Momente festzuhalten.</p>
                </article>
=======
=======
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752
                <h2>Hobbys</h2>
                <article class="hobby-item">
                    <h3>Mit Freunden oder Familie treffen</h3>
                    <p>Kochen, Konzerte, Kino oder Kulturelle Veranstaltungen besuchen</p>
                    <h3>Sport</h3>
                    <p>Fitness und Schwimmen</p>
                    <h3>Lesen & Games</h3>
                    <p>Bevorzugte Autoren Nassim Nicholas Taleb und Yuval Noah Harari.<br>
                        Ab und zu auch mal mit Freunden Zocken, gerne auch Spiele aus der jugend wie Command & Conquer.</p>

                </article>

<<<<<<< HEAD
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752
=======
>>>>>>> fb063d2c84feb339be8d6a407deae3e4c0bf7752
                <!-- Weitere Hobbys hier hinzufügen -->
            </section>
        </div>
    </section>
</main>

<?php
include FOOTER_PATH;
?>
