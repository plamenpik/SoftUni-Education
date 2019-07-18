<?php

if (isset($_GET['lines'])) {
    $input = explode("\n", $_GET['lines']);
    asort($input);
    $sorted = '';
    foreach ($input as $town) {
        $sorted .= "$town\n";
    }
   }
?>

<form>
  <textarea rows="10" name="lines"><?= $sorted
      ?></textarea> <br>
    <input type="submit" value="Sort">
</form>