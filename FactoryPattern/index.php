<?php

function __autoload($class_name) {
    include $class_name . '.php';
}

$file = __DIR__ . "/file.json";

$obj = ParserFactory::getParser($file);

var_dump($obj->parseFile());

?>