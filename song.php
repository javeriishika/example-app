<?php

class Song {
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor (optional)
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    // Getter and Setter functions for title
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter and Setter functions for artist
    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter and Setter functions for genre
    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter and Setter functions for tempo
    public function getTempo() {
        return $this->tempo;
    }

    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}

// Example usage
$song = new Song("Song Title", "Artist Name", "Genre", 120);

// Getting values
echo "Title: " . $song->getTitle() . "\n";
echo "Artist: " . $song->getArtist() . "\n";
echo "Genre: " . $song->getGenre() . "\n";
echo "Tempo: " . $song->getTempo() . "\n";

// Setting new values
$song->setTitle("New Song Title");
$song->setArtist("New Artist Name");
$song->setGenre("New Genre");
$song->setTempo(140);

// Getting updated values
echo "\nUpdated Values:\n";
echo "Title: " . $song->getTitle() . "\n";
echo "Artist: " . $song->getArtist() . "\n";
echo "Genre: " . $song->getGenre() . "\n";
echo "Tempo: " . $song->getTempo() . "\n";

