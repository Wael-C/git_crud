<?php

require_once('autoload.php');

$controller = new controller\Controller;
// echo '<pre>'; print_r($controller); echo '</pre>';
// echo '<pre>'; print_r(get_class_methods($controller)); echo '</pre>';


$controller->handleRequest();