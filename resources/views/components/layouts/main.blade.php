<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

    .wrapper {
      display: grid;
      grid-template-areas:
        'header header'
        'sidebar main'
        'footer footer';
      grid-template-columns: 200px 1fr;
      grid-template-rows: auto 1fr auto;
      min-height: 100vh;
    }

    header {
      grid-area: header;
      background-color: #333;
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    main {
      grid-area: main;
      padding: 20px;
    }

    aside {
      grid-area: sidebar;
      background-color: #f4f4f4;
      padding: 20px;
    }

    footer {
      grid-area: footer;
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
      border: 1px solid #ccc;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }
  </style>
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

