<?php

/**
 * @author Daniel Cabrera Peraza
 * @author CaPerDev <caperdeveloper@gmail.com>
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $binaryText = isset($_POST['binary']) ? $_POST['binary'] : '';
    $binaryText = trim($binaryText);

    if (empty($binaryText)) {
        $errorResult = 'You have not entered any value';
        header("Location: index.php?resultText=" . urlencode($errorResult));
        exit();
    }

    if (!empty($binaryText)) {
        $resultText = binaryToText($binaryText);
        header("Location: index.php?resultText=" . urlencode($resultText));
        exit();
    }
}


function binaryToText($binaryText)
{
    $resulText = '';

    $bytes = str_split($binaryText, 8);

    foreach ($bytes as $byte) {
        $dec = bindec($byte);
        $character = chr($dec);
        $resulText .= $character;
    }

    return $resulText;

}
