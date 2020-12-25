<?php

namespace Tests;

use App\Services\StringService;
use PHPUnit\Framework\TestCase;

class StringServiceTest extends TestCase
{
    function test_if_get_full_name_returns_name() {
        $instance = new StringService();

        $this->assertSame('Artūras M.', $instance->getFullName('Artūras', 'M.'));
    }
}