#!/usr/local/bin/php
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
	<link rel="manifest" href="favicons/site.webmanifest">
	<link rel="shortcut icon" href="favicons/favicon.ico">
	<link rel="stylesheet" href="basic.css">
	<title>Flora's Drawings</title>
	<script src="gallery.js" defer></script>
</head>
<body id="posts-body">
	<header>
		<h1 id="posts-title">Flora's Drawings</h1>
	<header>
	<main>
		<div>
			<h2>Featured Image</h2>
            <span>Click for a random image, or select one from below.</span><br>
            <img src="posts/drawings/sakura.jpeg" id="photo_frame" onclick="changePhoto()" width="600">
            <br><span id="photo_caption"></span><br>
        </div>

        <div>
        	<h2>2021 Drawings</h2>
        	<table>
        		<tbody>
        			<tr>
        				<td><img src="posts/drawings/icon.jpeg" alt="icon" width="200"></td>
        				<td><img src="posts/drawings/beach.jpeg" alt="beach" width="200"></td>
        			</tr>
        			<tr>
        				<td><img src="posts/drawings/sakura.jpeg" alt="sakura" width="200"></td>
        				<td><img src="posts/drawings/happy_sunday.jpeg" alt="happy sunday" width="200"></td>
        			</tr>
        		</tbody>
        	</table>
		</div>

		<hr>

		<div>
			<h2>Your Turn to Try!</h2>
			<!-- the buttons for the canvas -->
			<input type="button" onclick="clearCanvas()" value="Clear Canvas">
            <input type="button" onclick="newCanvas()" value="Save Canvas">
            <input type="button" onclick="loadImage()" value="Restore Canvas">
            <br>
            <!-- the RGB selector -->
            <label for="red">Red</label>
            <input type="range" id="red" min="0" max="255" value="0" step="1" oninput="updateColors()">
            <label for="green">Green</label>
            <input type="range" id="green" min="0" max="255" value="0" step="1" oninput="updateColors()">
            <label for="blue">Blue</label>
            <input type="range" id="blue" min="0" max="255" value="0" step="1" oninput="updateColors()">
            <br>
            <!-- the canvas -->
            <div id="drawing_area"><canvas></canvas></div>
            <br>
        </div>

        <div>
            <!-- where we store the user's drawings -->
            <h2>Past Drawings</h2>
            <div id="past_drawings"></div>
            <!-- use a web form to interact with server -->
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="display: none;">
                <input type="text" name="canvas" id="toPHP_text">
                <input type="submit" id="toPHP_submit">
            </form>
		</div>

	</main>
	<a href="index.html" class="gohome">return to homepage</a>
	<footer>
		<small>&copy; Flora Wang, <script>document.write(new Date().getFullYear());</script></small>
	</footer>
</body>
</html>