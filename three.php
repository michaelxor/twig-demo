<?php

require_once(__DIR__.'/include/config.php');

echo $twig->render('html_extended.html', array(
    'title' => "Three",
    'view' => "three",
//    'next' => "four.php"
));

