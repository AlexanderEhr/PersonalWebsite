<?php
// einfügen config.php
require_once __DIR__ .'/../src/config/config.php';
// einfügen des header
include HEADER_PATH;
?>
<main>
    <h1>Games & Code</h1>
    <div id="div1">
        <h2>Tic Tac Toe Spiel</h2>
        <p>Hier findest du das <a href="#" onclick="openPopup('tictactoe.html')">Tic Tac Toe Spiel</a>.</p>
    </div>

    <div id="div2">
        <h2>Schachspiel</h2>
        <p>Hier findest du das <a href="#" onclick="openPopup('schachspiel.html')">Schachspiel</a>.</p>
    </div>

    <div id="div3">
        <h2>Code Beispiele</h2>
        <article>
            <section>
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
            <section>
                <h3>CSS Code Beispiel</h3>
                <pre><code>body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}</code></pre>
            </section>
            <section>
                <h3>JavaScript Code Beispiel</h3>
                <pre><code>console.log('Hallo Welt!');</code></pre>
            </section>
        </article>
    </div>
</main>

<?php
include FOOTER_PATH;
?>