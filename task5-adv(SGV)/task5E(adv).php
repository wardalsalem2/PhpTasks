<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>  The project name, and script name</h2>
    <?php
    $projectName = "task5E(adv).php";
    $scriptName = $_SERVER['SCRIPT_NAME'];
    echo "<p><strong>Project Name:</strong> $projectName</p>";
    echo "<p><strong>Script Name:</strong> $scriptName</p>";
    ?>
</body>
</html>