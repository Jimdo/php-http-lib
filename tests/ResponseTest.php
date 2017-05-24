<?php

namespace Jimdo\Http;

use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
{
    /**
     * @test
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function itShouldTestHeader()
    {
        $response = new Response();

        $header = 'Content-Type: text/html;charset=UTF-8';
        $response->addHeader($header);

        $header = 'Location: 172.0.0.1;charset=UTF-8';
        $response->addHeader($header);

        $response->render();

        $this->assertContains($header, xdebug_get_headers());
    }

    /**
     * @test
     */
    public function itShouldTestBodyAndRendering()
    {
        $response = new Response();

        $body = 'hase';
        $response->addBody($body);

        $body = 'igel';
        $response->addBody($body);

        $body = 'fuchs';
        $response->addBody($body);

        $bodyContent = "haseigelfuchs";
        $this->assertContains($bodyContent, $response->render());
    }
}