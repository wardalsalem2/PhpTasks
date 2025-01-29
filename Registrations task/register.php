<?php include('conn.php')?>

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

<section  class="" style="justify-items: center;">
        <h1 style="margin-top: 10px;">Registration Page</h1>
    
    <form style="width: 40%;"  method="post">

    <div class="mb-3 mt-3">
        <label  for="text" class="form-label is-required">Name</label>
        <input id="namee" onblur="nam(event)" type="text" class="form-control"  required  name="name">
        <div class="form-text small" id="txname">Enter Your Name </div> 
        


        <label  for="email" class="form-label is-required">Email</label>
        <input type="email" class="form-control" id="email" onblur="validate(event)" required name="email">
        <div class="form-text small" id="txemail">eg: username@domain.com</div> 


        
        <label  for="bassword" class="form-label is-required  "> bassword</label>
        <input  onblur="pas(event)" type="password" class="form-control" required name="bassword"> 
        <div id="masspass" class="form-text small">The Password should be between 6-18 characters.</div> 

        
        <label  for="conpass" class="form-label is-required">Verify Password</label>
        <input onblur="equalpass(event)"  type="password" class="form-control"  required name="conpass">
        <div id="masspass2" class="form-text small">The Password should be between 6-18 characters.</div> 
        


        <div class="">
            <button onclick="register(event)" id="sinupp" style="width: 100%; height: 50px; margin-top: 20px;" type="submit" name="submit" value="register" class="btn btn-info">Register</button>
        </div>

        <div class="">
            <button onclick="haveacc()" style="width: 100%; height: 50px; margin-top: 20px;border: 2px solid;" type="submit"  class="btn btn-Light grey">Already have an account? Login</button>
        </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $bassword = $_POST['bassword'];
    
    $if = true;
    if(!filter_var($email ,   FILTER_VALIDATE_EMAIL)){
        $if = false;
    }
    if($bassword < 6 ){
        $if = false;
    }
    if($if){
        include 'conn.php';
        $query = "INSERT INTO `users`(`Name`, `Email`, `bassword` , `role`) VALUES ('$name','$email','$bassword' , 'user')";
        $result = mysqli_query($conn, $query); 
    }
    if (!$result) {
        die("Query Failed: " . mysqli_error($conn));
    } else {
        header('Location: login.php?insert_msg=Record successfully added');
        exit();
    }
}
?>




</form>
</section>


<script src="all.js"></script>
</body>
</html>