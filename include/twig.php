<?php

// Twig has several "Loaders"


// String Loader
$loader_str = new Twig_Loader_String();
$twig_str = new Twig_Environment($loader_str);


// Filesystem Loader
$loader = new Twig_Loader_Filesystem(TEMPLATE_ROOT);
$twig = new Twig_Environment($loader);

