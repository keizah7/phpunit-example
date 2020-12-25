<?php

if (! function_exists('join_strings')) {
    /**
     * @param string ...$strings
     * @return string
     */
    function join_strings(string ...$strings): string
    {
        return implode(' ', $strings);
    }
}