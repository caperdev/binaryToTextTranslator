<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="public/img/Logo_CaPerDev.ico">
        <link rel="stylesheet" href="public/commons.css">
        <title>Binary To Text Translator</title>
    </head>
    <body>

        <div class="container">
            <form class="form" action="functions.php" method="post">
                <div class="title">
                    Binary to Text
                </div>
                <input type="text" placeholder="Binary code to translate" class="input" name="binary" id="binary">
                <div class="buttonContainer">
                    <button type="submit">Translate</button>
                    <button type="reset" onclick="redirectToURL('index.php')">Clean</button>
                </div>
                <?php
                    if (isset($_GET["resultText"])) {
                        $translatedText = $_GET["resultText"];
                        echo '<div class="resultText">' . htmlspecialchars($translatedText) . '</div>';
                    }
                ?>
            </form>
        </div>

        <script src="public/commons.js"></script>
    </body>
</html>