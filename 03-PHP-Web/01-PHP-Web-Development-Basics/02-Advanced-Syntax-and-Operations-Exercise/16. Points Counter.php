<?php

$input = readline();
$pattern = '(\|*\w+\|*)';
$teams = [];
$players = [];

while ($input != 'Result') {
    preg_match_all($pattern, $input, $matches);
    $matches = array_shift($matches);

    $text = "";
    for ($i = 0; $i < count($matches); $i++) {
        $text .= $matches[$i];
    }

    $splited = explode('|', $text);
    $points = $splited[2];

    if (ctype_upper($splited[0])) {
        $team = $splited[0];
        $player = $splited[1];

        if (!array_key_exists($team, $teams)) {
            $teams[$team] = [];
            if (!array_key_exists($player, $teams[$team])) {
                $teams[$team][$player] = 0;
            }
            $teams[$team][$player] = $points;
        }
        $teams[$team][$player] = $points;
    } else {
        $player = $splited[0];
        $team = $splited[1];

        if (!array_key_exists($team, $teams)) {
            $teams[$team] = [];
            if (!array_key_exists($player, $teams[$team])) {
                $teams[$team][$player] = 0;
            }
        }
    }
    $teams[$team][$player] = $points;
    $input = readline();
}

foreach ($teams as $key => $value) {

    arsort($value);

    if (!array_key_exists($key, $players)) {

        $players[$key] = 0;
    }

    foreach ($value as $k => $v) {

        $players[$key] += $v;
    }
}

arsort($players);

foreach ($players as $key => $value) {
    arsort($teams[$key]);
    echo "$key => $value" . PHP_EOL;
    echo "Most points scored by " . key($teams[$key]) . PHP_EOL;
}
