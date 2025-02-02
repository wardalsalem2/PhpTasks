<?php
if (isset($_POST['pokemon'])) {
    $pokemonName = strtolower($_POST['pokemon']);
    $url = "https://pokeapi.co/api/v2/pokemon/$pokemonName";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pokemon Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
            display: flex;
            flex-direction: column;
            
        
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            margin-bottom: 20px;
            width: 50%;
        }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }
        button {
            padding: 10px 15px;
            background-color: #ffcc00;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #e6b800;
        }
        .pokemon-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: center;
            margin-top: 10px;
            width: 50%;
        }
        .pokemon-card img {
            width: 150px;
        }
        .pokemon-card h2 {
            margin-bottom: 10px;
            color: #333;
        }
        .pokemon-card p {
            color: #666;
        }
    </style>
</head>
<body>
    <form method="POST">
        <input type="text" name="pokemon" placeholder="Enter Pokemon name...">
        <button type="submit">Search</button>
    </form>

    <?php if (isset($data)): ?>
        <div class="pokemon-card">
            <h2><?php echo ucfirst($data['name']); ?></h2>
            <img src="<?php echo $data['sprites']['front_default']; ?>">
            <p>Abilities: 
                <?php foreach ($data['abilities'] as $ability): ?>
                    <?php echo $ability['ability']['name'] . ", "; ?>
                <?php endforeach; ?>
            </p>
        </div>
    <?php endif; ?>
</body>
</html>
