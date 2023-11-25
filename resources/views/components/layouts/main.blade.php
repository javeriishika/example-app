<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
  <title>Your Playlist App</title>
</head>
<body>

  <div class="wrapper">
    <header>
      <h1>Playlist Title</h1>
      <div>
        <a href="#">Edit Playlist</a> |
        <a href="#">New Playlist</a>
      </div>
    </header>

    <aside>
      <h2>Saved Playlists</h2>
      <!-- Add your list of saved playlists here -->
    </aside>

    <main>
      <h2>Song List</h2>
      <table>
        <thead>
          <tr>
            <th>Serial No</th>
            <th>Song Title</th>
            <th>Artist Name</th>
            <th>Album Name</th>
            <th>Duration</th>
            <!-- Add other table headers as needed -->
          </tr>
        </thead>
        <tbody>
          <!-- Add your list of songs here -->
        </tbody>
      </table>
    </main>

    <footer>
      <p>&copy; 2023 Your Playlist App</p>
      <nav>
        <a href="#">About</a> |
        <a href="#">Terms</a> |
        <a href="#">Privacy</a>
        <!-- Add other links as needed -->
      </nav>
    </footer>
  </div>

</body>
</html>

