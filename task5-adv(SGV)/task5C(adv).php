<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="number" name="num1" > <br><br>
    <input type="text" name="text" size="2" ><br><br>
    <input type="number" name="num2" ><br><br>
    <input type="submit" >
    </form>

    <?php
    if($_POST["text"]== "+"){
    echo $_POST["num1"] + $_POST["num2"];
    }
    elseif($_POST["text"]== "-"){
    echo $_POST["num1"] - $_POST["num2"];
    }
    elseif($_POST["text"]== "*"){
    echo $_POST["num1"] * $_POST["num2"];
    }

    ?>
</body>
</html>