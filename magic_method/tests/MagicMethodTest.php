<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\MagicMethod;


class MagicMethodTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->magic_method = new MagicMethod();
    }

    public function testMagicGet()
    {
        $result = $this->magic_method->hoge;
        $this->assertEquals('call __get method.', $result);
    }

    public function testMagicCall()
    {
        $result = $this->magic_method->hoge();
        $this->assertEquals('call __call method.', $result);
    }

    public function testMagicStaticCall()
    {
        $result = $this->magic_method::hoge();
        $this->assertEquals('call __callStatic method.', $result);
    }

    public function testMagicInvoke()
    {
        $result = $this->magic_method;
        $this->assertEquals('call __invoke method.', $result());
    }
}
