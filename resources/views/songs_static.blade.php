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
      grid-template-columns: 1fr 3fr; /* Adjust column widths as needed */
      grid-template-rows: auto 1fr auto;
      min-height: 100vh;
    }

    header, aside, main, footer {
      padding: 20px;
    }

    header, footer {
      background-color: #333;
      color: #fff;
    }

    header h1 {
      margin: 0;
    }

    aside, main {
      border-right: 1px solid #ccc;
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

    footer {
      background-color: #333;
      color: #fff;
    }

    nav ul {
      list-style: none;
      padding: 0;
      display: flex;
      justify-content: space-around;
    }

    nav a {
      color: #fff;
      text-decoration: none;
    }

    nav a:hover {
      text-decoration: underline;
    }
  </style>
  <title>Your Playlist App</title>
</head>
<body>

  <div class="wrapper">
    <header>
      <h1>Playlist Title</h1>
      <!-- Add other basic information here -->
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
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <!-- Add other links as needed -->
        </ul>
      </nav>
    </footer>
  </div>

</body>
</html>

