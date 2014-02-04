<?php

require_once(__DIR__.'/include/config.php');

// There is also a (much more useful) filesystem loader that allows
// is to define a base template directory and create long-lived templates
echo $twig->render('html.html', array(
    'title' => "One",
    'view' => "one",
    'next' => "two.php"
));

