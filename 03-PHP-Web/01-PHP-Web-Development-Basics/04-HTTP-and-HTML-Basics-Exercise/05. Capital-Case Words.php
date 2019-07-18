<?php

if (isset($_GET['text'])) {
    $input = $_GET['text'];
    $arr = preg_split("/[^\w]/", $input, -1, PREG_SPLIT_NO_EMPTY);
    $filtered = [];
    $result = '';
    foreach ($arr as $word) {
        if (strtoupper($word) == $word) {
            array_push($filtered, $word);
        }
    }
    $result = implode(', ', $filtered);
}
?>

<form>
    <textarea rows="10" name="text"><?= $result
        ?></textarea><br>
<input type="submit" value="Extract">
</form>
