<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Kontakt</h1>
        <nav>
            <ul>
                <li><a href="index.php">Startseite</a></li>
                <li><a href="about.php">Über mich</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </nav>
    </header>
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
    <footer>
        <p>&copy; 2024 Alexander Ehrlich</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>

