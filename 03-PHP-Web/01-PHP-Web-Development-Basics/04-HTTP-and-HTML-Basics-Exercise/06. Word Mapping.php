<?php

if (isset($_GET['input'])) {
    $input = $_GET['input'];
    $input = preg_split("/[^A-za-z]+/", $input, -1, PREG_SPLIT_NO_EMPTY);
    $wordCounter = [];
    for ($i = 0; $i < count($input); $i++) {
        $input[$i] = strtolower($input[$i]);
        if (!array_key_exists($input[$i], $wordCounter)) {
            $wordCounter[$input[$i]] = 1;
        } else {
            $wordCounter[$input[$i]]++;
        }
    }
    echo "<table border='2'>";
    foreach ($wordCounter as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
}
?>

<form>
    <textarea rows="4" name="input"></textarea><br>
<input type="submit" value="Count words">
</form>