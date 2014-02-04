<?php

require_once(__DIR__.'/include/config.php');

$table_headers = array("One", "Two", "Three", "Four", "Five", "Six");

$table_data = array();
$cols = 6;
$rows = 20;
for ($i = 0; $i < $cols; $i++) {
    for ($j = 0; $j < $rows; $j++) {
        $r = mt_rand(0, 1);
        if ( $r ) {
            $table_data[$j][$i] = array(
                'type' => 'string',
                'value' => get_random_word()
            );
        }
        else {
            $table_data[$j][$i] = array(
                'type' => 'int',
                'value' => mt_rand(1000, 10000000)
            );
        }
    }
}


echo $twig->render('html.html', array(
    'title' => "Two",
    'view' => "two",
    'table_headers' => $table_headers,
    'table_data' => $table_data,
    'next' => "three.php"
));

