<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class CoreRequestTest extends TestCase
{
    public function testIsIssetRequest()
    {
        $request = new \Core\Request('/');

        $this->assertStringContainsString('/', $request->get());
    }

    public function testIsIgnoreGetParams()
    {
        $request = new \Core\Request('/home?id=5&name=ssv');

        $this->assertTrue((bool)preg_match('~^\/home$~', $request->get()));
    }

}