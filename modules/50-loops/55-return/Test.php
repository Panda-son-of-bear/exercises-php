<?php

namespace HexletBasics\Loops\ReturnInLoop;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        assert(doesContain('Renly', 'R'));
        assert(!doesContain('Renly', 'r'));
        assert(doesContain('Tommy', 'm'));
        assert(!doesContain('Tommy', 'd'));
    }
}
