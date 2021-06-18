<?php
    if (! function_exists('active')) {
        function active($path, $current_path)
        {
            if ($path == $current_path) {
                return 'item-active';
            } else {
                return 'text-white';
            }
        }
    }
