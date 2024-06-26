<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Meine persönliche Website und Bewerbung als Anwendungsentwickler.">
    <meta name="keywords" content="Anwendungsentwickler, Bewerbung, Portfolio, Projekte, IT">
    <title><?php echo getPageTitle(); ?></title>
    <?php loadStyles(); ?>
</head>
<body>
    <div id="body-container" class="body-page-container">
        <header id="site-header-wrapper" class="site-header-wrapper" tabindex="-1">
            <div id="site-header" class="site-header" tabindex="-1">
                <div class="header-container">
                    <div class="header-intro-text">
                        <span class="blue-square"></span>
                        <p class="name-text"><a href="index.php">Alexander Ehrlich</a></p>
                        <span class="slash">/</span>
                        <p class="role-text">Anwendungsentwickler</p>
                    </div>
                    <nav class="main-nav">
                        <button class="nav-toggle" aria-label="Navigation umschalten">
                            <span class="nav-icon"></span>
                        </button>
                        <ul class="nav-list">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">Über mich</a></li>
                            <li><a href="education.php">Ausbildung</a></li>
                            <li><a href="contact.php">Kontakt</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
