<?php
require_once __DIR__ . '/../src/config/config.php';
include HEADER_PATH;
?>

<main>
    <section id="contact">
        <h2>Kontakt</h2>
        <form action="send_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">E-Mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Nachricht:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Senden</button>
        </form>
    </section>
</main>

<?php
include FOOTER_PATH;
?>
