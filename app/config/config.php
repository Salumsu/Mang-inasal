<?php

    $paths = [
        'PARTIALS_PATH' => APPLICATION_PATH . $DS . 'partials' . $DS,
        'VIEWS_PATH' => APPLICATION_PATH . $DS . 'views' . $DS,
        'LIBS_PATH' => APPLICATION_PATH . $DS . 'lib' . $DS,
        'CSS_PATH' => 'app' . $DS . 'misc' . $DS . 'css' . $DS,
        'JS_PATH' => 'app' . $DS . 'misc' . $DS . 'js' . $DS,
        'CONTROLLERS_PATH' => 'app' . $DS . 'controllers' . $DS
    ];

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database_name = 'manginasal';

    $conn = new mysqli($host, $user, $password, $database_name);

    if (!$conn) {
        die("Cannot connect to database");
    }
