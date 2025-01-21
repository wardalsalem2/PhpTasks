<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="">
<label for="URL"> Enter URL :</label>
<input type="text" name="url" >
<br><br>
<input type="submit" value="GO">
    </form>
<?php
    if(!empty($_GET['url'])){
        $url = $_GET['url'];
    
    if(filter_var($url , FILTER_VALIDATE_URL)){
        header("location: ". $url);
        exit();
    }
    else{
        echo "<p style='color: red;'>Invalid URL. Please enter a valid URL (e.g., https://example.com/).</p>";
    }
    }

?>

</body>
</html>

