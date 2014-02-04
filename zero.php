<?php

require_once(__DIR__.'/include/config.php');

$names = "Alison & Paige & Wes";

// There is also a (much more useful) filesystem loader that allows
// is to define a base template directory and create long-lived templates
echo $twig->render('html.html', array(
    'title' => "Zero",
    'names' => $names,
    'view' => "hello",
    'next' => "one.php"
));
