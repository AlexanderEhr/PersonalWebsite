<?php
// Einbinden der Konfigurationsdatei
require_once __DIR__ . '/../src/config/config.php';
// Einbinden des Headers
include HEADER_PATH;
?>

<main>
    <!-- Hauptsektion für Games und Code -->
    <section id="games" class="games-section" title="Games und Code">
        <h1>Games & Code</h1>

        <!-- Bereich für das Tic Tac Toe Spiel -->
        <div id="tictactoe-game" class="game" title="Tic Tac Toe Spiel">
            <h2>Tic Tac Toe Spiel</h2>
            <p>Hier findest du das <a href="#" onclick="openPopup('tictactoe.html')">Tic Tac Toe Spiel</a>.</p>
        </div>

        <!-- Bereich für das Schachspiel -->
        <div id="chess-game" class="game" title="Schachspiel">
            <h2>Schachspiel</h2>
            <p>Hier findest du das <a href="#" onclick="openPopup('schachspiel.html')">Schachspiel</a>.</p>
        </div>

        <!-- Bereich für Code-Beispiele -->
        <div id="code-examples" class="game" title="Code Beispiele">
            <h2>Code Beispiele</h2>
            <article class="code-examples">
                <!-- HTML Code Beispiel -->
                <section id="html-example" class="code-example" title="HTML Code Beispiel">
                    <h3>HTML Code Beispiel</h3>
                    <pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Beispiel&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hallo Welt!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                </section>
                
                <!-- CSS Code Beispiel -->
                <section id="css-example" class="code-example" title="CSS Code Beispiel">
                    <h3>CSS Code Beispiel</h3>
                    <pre><code>body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}</code></pre>
                </section>
                
                <!-- JavaScript Code Beispiel -->
                <section id="javascript-example" class="code-example" title="JavaScript Code Beispiel">
                    <h3>JavaScript Code Beispiel</h3>
                    <pre><code>console.log('Hallo Welt!');</code></pre>
                </section>
            </article>
        </div>
    </section>
</main>

<?php
// Einbinden des Footers
include FOOTER_PATH;
?>
