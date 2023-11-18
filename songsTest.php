    /**
     * A basic feature test songs.
     */
    public function testSongsOk(): void
    {
        $response = $this->get('/songs');

        $response->assertStatus(200);
    }
<?php
use PHPUnit\Framework\TestCase;

class songTest extends TestCase {
    // Your existing test methods...

    public function testSongsRouteExists() {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://your-app-url/songs');

        $this->assertEquals(200, $response->getStatusCode());
        // Add more assertions as needed
    }
}

