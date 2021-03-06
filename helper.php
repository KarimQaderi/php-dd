<?php

if (! function_exists('dd')) {
        /**
         * Dump the passed variables and end the script.
         *
         * @param  mixed
         * @return void
         */
        function dd(...$arg)
        {
            array_map(function ($x) {
                (new KarimQaderi\DD\Dumper\Dumper)->dump($x);
            }, func_get_args());
            
            die(1);
        }
    }
