<form>
    <textarea rows="2" name="input"></textarea><br>
    <input type="submit" value="Color text">
</form>

<?php

if (isset($_GET['input'])) {
    $input = $_GET['input'];
    $input = explode(' ', $input);
    $text = '';
    foreach ($input as $word) {
        $text .= $word;
    }

    for ($i = 0; $i < strlen($text); $i++) {
        if (ord ($text[$i]) % 2 == 0) {
            echo "<span style=\"color:red\">$text[$i] </span>";
        } else {
            echo "<span style=\"color:blue\">$text[$i] </span>";
        }
    }
}