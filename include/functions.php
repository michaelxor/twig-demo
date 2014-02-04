<?php

function get_random_word() {
    $dict = fopen("/usr/share/dict/words", "rb");
    $lines = 235886;
    $r = mt_rand(0, $lines-1);
    for ($i = 0; $i < $r; $i++) {
        fgets($dict);
    }
    $str = fgets($dict);
    fclose($dict);

    return strtolower(trim($str));
}
