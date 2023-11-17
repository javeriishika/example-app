    /**
     * A basic feature test songs.
     */
    public function testSongsOk(): void
    {
        $response = $this->get('/songs');

        $response->assertStatus(200);
    }
