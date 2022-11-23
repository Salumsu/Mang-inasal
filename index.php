<?php
    $DS = DIRECTORY_SEPARATOR;
    defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(__DIR__) . $DS . 'app');
    
    require APPLICATION_PATH . $DS . 'config' . $DS . 'config.php';
    require $paths['LIBS_PATH'] . 'get_param.php';

    $path = get_param('page', 'home');
    $view = $paths['VIEWS_PATH'] . $path . '.phtml';
    $_404 = $paths['VIEWS_PATH'] . '404.phtml';

    if (file_exists($view)) {
        require($view);
    } else {
        require $_404;
    }

