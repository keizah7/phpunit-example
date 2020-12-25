<?php

namespace App\Services;

class StringService
{
    /**
     * @param string $name
     * @param string $surname
     * @return string
     */
    public function getFullName(string $name, string $surname):string
    {
        return join_strings($name, $surname);
    }
}