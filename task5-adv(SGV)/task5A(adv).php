<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
echo "<h2> It's post method </h2>". "<br>";
echo $_POST["email"]. "<br>";
echo $_POST["password"];
}
elseif($_SERVER['REQUEST_METHOD']=="GET"){
echo "<h2> It's Get method</h2>". "<br>";
echo  $_GET["email"] . "<br>";
echo $_GET["password"];
}
?> 
