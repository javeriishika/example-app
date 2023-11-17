<?php

use PHPUnit\Framework\TestCase;

class YourTest extends TestCase
{
    // ... (your existing test methods)

    public function testSongsEndpointExists()
    {
        // Make a request to /songs
        $response = $this->get('/songs');

        // Assert that the response status code is 200 (OK)
        $this->assertEquals(200, $response->getStatusCode());

        // Optionally, you can further assert the response content or structure if needed
        // For example, you might check if the response contains certain data expected from /songs
        // $this->assertContains('expected_data', $response->getBody()->getContents());
    }

    // ... (other test methods)
}

