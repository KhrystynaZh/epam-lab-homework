<?php

if(!function_exists('dd')) {
    function dd()
    {
        array_map(function($a) {
            dump($a);
        }, func_get_args());
        die(1);
    }
}
