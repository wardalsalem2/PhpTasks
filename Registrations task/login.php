<?php 
include('conn.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-laZ3JUZ5Ln2YqhfBvadDpNyBo7w5qmWaRnnXuRwNhJeTEFuSdGbzl4ZGHAEnTozR" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/js/boosted.bundle.min.js" integrity="sha384-3RoJImQ+Yz4jAyP6xW29kJhqJOE3rdjuu9wkNycjCuDnGAtC/crm79mLcwj1w2o/" crossorigin="anonymous"></script>

</head>
<body>

<div>
<?php

if (isset($_POST['login'])){
    
    $email = $_POST['email'];
    $bassword = $_POST['bassword'];
    include 'conn.php';
    $query = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if($bassword == $user["bassword"]) {
            session_start();
            $_SESSION['name']= $user["Name"];
            $_SESSION['email']= $email;

            if($user["role"]== "admin"){
                header("location: admin.php");
            }
            else{
            header("Location: view.php");}
            exit();
        } else {
            echo "Wrong password";
        }
    } else {
        echo "Email not found";
    }
    }

?>



<section  class="" style="justify-items: center ">


    <h1 style="margin-top: 10px;">Login Page</h1>
    
    <form style="width: 40%;"  method="post">

    <div class="mb-3 mt-3">

        <label  for="email" class="form-label is-required">Email</label>
        <input type="email" class="form-control" id="email" onblur="validate(event)" required name="email">
        <div class="form-text small" id="txemail">eg: username@domain.com</div> 


        <label  for="bassword" class="form-label is-required  "> bassword</label>
        <input  onblur="pas(event)" type="password" class="form-control" required name="bassword"> 
        <div id="masspass" class="form-text small">The Password should be between 6-18 characters.</div> 


        <div class="">
            <button onclick="login(event)" id="sinupp" style="width: 100%; height: 50px; margin-top: 20px;" type="submit" name="login" value="login" class="btn btn-info">LogIn</button>
        </div>

</div>
</form>
</section>


<script src="all.js"></script>
</body>
</html>