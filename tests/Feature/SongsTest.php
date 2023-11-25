use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class SongsTest extends TestCase
{
    protected $httpClient;

    protected function setUp(): void
    {
        // Initialize the HTTP client before each test
        $this->httpClient = new Client([
            'base_uri' => 'http://your-app-base-url', // Replace with the actual base URL of your application
        ]);
    }

    public function testSongsStaticEndpointReturns200()
    {
        // Send a request to the /songs_static endpoint
        $response = $this->httpClient->get('/songs_static');

        // Assert that the response status code is 404 (this is intentionally incorrect for a failing test)
        $this->assertEquals(404, $response->getStatusCode());
    }
}

