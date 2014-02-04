<?php

require_once(__DIR__.'/include/config.php');


// this is an HTML string
$html = <<<HTML
<h1>Hello {{ names }}!</h1>
<br>
<a href="{{ next }}">Next</a>
HTML;


// The string loader allows us to dynamically provide a string that is
// generated into a view
$names = "Alison & Paige & Wes";
echo $twig_str->render($html, array(
    'names' => $names,
    'next' => "zero.php",
));
