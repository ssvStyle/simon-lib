<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class CoreRequestTest extends TestCase
{
    public function testIsIssetRequest()
    {
        $request = new \Core\Request('/');

        $this->assertStringContainsString('/', $request->get());
    }

}