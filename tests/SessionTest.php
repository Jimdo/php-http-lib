<?php

namespace Jimdo\Http;

use PHPUnit\Framework\TestCase;

class SessionTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldSetAndGetSessionDataWithMagicProberties()
    {
        $sessionData = [
            'hase' => 1234,
            'igel' => [1, 2, 3]
        ];

        // set session data
        $session = new Session($sessionData);

        // get session data
        $value = $session->hase;
        $this->assertTrue(isset($value));

        $value = $session->igel;
        $this->assertTrue(isset($value));

        // another way to set session data
        $session->fuchs = [3, 4, 5];
        $session->name = "katharina";

        // get session data
        $value = $session->fuchs;
        $this->assertTrue(isset($value));

        $value = $session->name;
        $this->assertTrue(isset($value));
    }

    /**
     * @test
     */
    public function itShouldModifyGivenSessionData()
    {
        $sessionData = [
            'hase' => 'nicht knuddelig',
        ];

        $session = new Session($sessionData);

        $session->hase = 'sehr knuddelig';

        $this->assertEquals($sessionData['hase'], 'sehr knuddelig');
    }
}
