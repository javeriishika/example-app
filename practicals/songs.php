<?php

// Include the Song class
require_once 'Song.php';

// Create a new Song instance
$song = new Song("Bohemian Rhapsody", "Queen", "Rock", 72);

// Display information using getter functions
echo "Title: " . $song->getTitle() . "\n";
echo "Artist: " . $song->getArtist() . "\n";
echo "Genre: " . $song->getGenre() . "\n";
echo "Tempo: " . $song->getTempo() . "\n";

// Update information using setter functions
$song->setTitle("Another One Bites the Dust");
$song->setArtist("Queen");
$song->setGenre("Rock");
$song->setTempo(110);

// Display updated information
echo "\nUpdated Information:\n";
echo "Title: " . $song->getTitle() . "\n";
echo "Artist: " . $song->getArtist() . "\n";
echo "Genre: " . $song->getGenre() . "\n";
echo "Tempo: " . $song->getTempo() . "\n";

?>

