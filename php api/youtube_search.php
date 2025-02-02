<?php
$apiKey = 'AIzaSyBxl1I2kLeLyNEQtwLtIdpWQAsZIBzzLcg';

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $query = urlencode($_GET['search']);
    $maxResults = 5;
    $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=$query&type=video&maxResults=$maxResults&key=$apiKey";

    $response = file_get_contents($url);
    $videos = json_decode($response, true);
} 
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search YouTube</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Tajawal', sans-serif; 
            text-align: center; 
            background-color: #f4f4f4; 
            margin: 0; 
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        form {
            margin: 20px auto;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        input {
            padding: 12px;
            width: 300px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
        }
        button {
            padding: 12px 20px;
            background-color: #ff0000;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        button:hover {
            background-color: #cc0000;
        }
        .results {
            display: flex; 
            flex-wrap: wrap; 
            justify-content: center; 
            margin-top: 20px;
        }
        .card {
            width: 260px; 
            margin: 10px; 
            padding: 12px; 
            border: none; 
            border-radius: 12px; 
            background: white; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%; 
            border-radius: 8px;
        }
        .card a {
            text-decoration: none; 
            color: #ff0000; 
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Search on YouTube</h2>
    <form method="GET">
        <input type="text" name="search" placeholder="Search ..." required>
        <button type="submit">Search</button>
    </form>


    <?php if (isset($videos) && !empty($videos['items'])): ?>
        <h3>The result (<?= count($videos['items']) ?>) </h3>
        <div class="results">
            <?php foreach ($videos['items'] as $video): ?>
                <div class="card">
                    <img src="<?= $video['snippet']['thumbnails']['high']['url'] ?>" alt="Thumbnail">
                    <h4><?= $video['snippet']['title'] ?></h4>
                    <a href="https://www.youtube.com/watch?v=<?= $video['id']['videoId'] ?>" target="_blank">watch video  </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php elseif (isset($_GET['search'])): ?>
        <p>didn't found any result</p>
    <?php endif; ?>

</body>
</html>