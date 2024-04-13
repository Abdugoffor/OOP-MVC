<?php

if (!function_exists('dd')) {
    function dd(...$vars)
    {
        echo "<body bgcolor='grey'>";
        echo "<pre style='background-color:black; color:white;'>";

        foreach ($vars as $var) {
            var_dump($var);
        }

        echo "</pre>";
        die(1);
    }
}
