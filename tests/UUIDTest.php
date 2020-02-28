<?php

namespace Test\GollumSF\UUID;

use GollumSF\UUID\UUID;
use PHPUnit\Framework\TestCase;

class UUIDTest extends TestCase
{
    public function testMinimalUsage()
    {
        $uuid = new UUID();
        $this->assertTrue(!!preg_match('/^[a-f0-9]{8}\-[a-f0-9]{4}\-[a-f0-9]{4}\\-[a-f0-9]{4}\-[a-f0-9]{10}$/', $uuid));
        $uuid = new UUID('12c634e0-0a86-cec3-03e6-7086f84d98');
        $this->assertEquals('12c634e0-0a86-cec3-03e6-7086f84d98', $uuid);
    }

    public function testException()
    {
        $this->expectException(\LogicException::class);
        new UUID('UNVALID');
    }

    public function testUniq()
    {
        $uuids = [];
        for ($i = 0; $i < 100000; $i++) {
            $uuids[] = (new UUID()) . '';
        }

        $before = count($uuids);
        $uuids = array_unique($uuids);
        $after = count($uuids);
        $this->assertEquals($before, $after);
    }

}
