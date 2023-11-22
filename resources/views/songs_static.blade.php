<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist App</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            display: grid;
            grid-template-columns: 200px 1fr;
            grid-template-rows: auto 1fr auto;
            min-height: 100vh;
        }

        header, footer {
            grid-column: span 2;
            padding: 15px;
            background-color: #333;
            color: #fff;
            text-align: center;
        }

        header {
            grid-row: 1;
        }

        footer {
            grid-row: 3;
        }

        main {
            padding: 15px;
        }

        sidebar {
            grid-row: 2;
            background-color: #f4f4f4;
            padding: 15px;
        }

        .playlist-info {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .playlist-info img {
            max-width: 50px;
            margin-right: 15px;
        }

        .playlist-info h2 {
            margin: 0;
            color: #333;
        }

        .song-list {
            list-style-type: none;
            padding: 0;
        }

        .song-item {
            border-bottom: 1px solid #ccc;
            padding: 10px;
            display: grid;
            grid-template-columns: 1fr 2fr 

