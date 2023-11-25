<!-- resources/views/songs.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs Page</title>
</head>
<body>

    <header>
        <h1>Songs Page</h1>
    </header>

    <main>
        <p>Welcome to the Songs Page!</p>
        <!-- Add your content here -->
    </main>

    <footer>
        <p>&copy; 2023 Your Website</p>
    </footer>
<table>
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
<tr>
<td>{{ $song->getTitle() }}</td>
<td>{{ $song->getArtist() }}</td>
</tr>
</table>
<table>
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->getTitle() }}</td>
<td>{{ $song->getArtist() }}</td>
</tr>
@endforeach
</table>
<x-layouts.main>
</x-layouts.main>
</body>
</html>

