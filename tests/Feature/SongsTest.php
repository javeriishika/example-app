use PHPUnit\Framework\TestCase;

class SongsTest extends TestCase {
    
    public function testSongsStaticEndpoint() {
        // Assuming you have a function to make an HTTP request to your /songs_static endpoint
        $response = makeHttpRequest('/songs_static');

        // Failing assertion - Expected 200, but the actual status is intentionally set to fail
        $this->assertEquals(200, $response->getStatusCode());
    }

    // Helper function to simulate making an HTTP request
    private function makeHttpRequest($endpoint) {
        // Assuming you have a function to make an HTTP request
        // This is a simplified example; you might use a library like Guzzle or any other HTTP client
        // to make actual HTTP requests in your application
        // Here, I'm just returning a mock response for demonstration purposes
        return new MockHttpResponse(500); // Assuming the endpoint always returns a 500 status code
    }
}

// MockHttpResponse class for demonstration purposes
class MockHttpResponse {
    private $statusCode;

    public function __construct($statusCode) {
        $this->statusCode = $statusCode;
    }

    public function getStatusCode() {
        return $this->statusCode;
    }
}
