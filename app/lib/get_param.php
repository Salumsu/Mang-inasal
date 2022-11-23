<?php
    function get_param(string $name, string $default = '') {
        return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $default;
    }