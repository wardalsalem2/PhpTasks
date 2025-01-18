<!-- Q1 -->
<?php
for ($i = 1; $i <= 10; $i++) {
echo $i ;
if($i<10){
    echo "-";
}
}
?>
<br><br>

<!--   Q2  -->
<?php
$sum=0;
for ($i = 0; $i <= 30; $i++) {
$sum += $i;
}
echo $sum;
?>
<br><br>

<!--  Q3  -->
<?php 
for($i=0 ; $i<5 ; $i++){
    for($j= 0 ; $j<5 ; $j++){
        if( $j<5 - $i-1){
            echo "A ";
    }else{
        echo chr(65 +$i)." ";
    }
}
echo "<br>";
}
?>
<br>

<!-- Q4 -->
<?php
for($i= 1; $i<= 5; $i++){
    for($j= 1; $j <= 5 ; $j++){
        if( $j <= 5 - $i ){
            echo "1"." ";
    }  
    else{
        echo $i." ";
    }
    }
echo "<br>";
}
?>
<br>

<!-- Q5 -->
<?php
for($i=1 ; $i <= 5 ; $i++ ){
    for($j=1 ; $j<=5 ; $j++){
        if($i==$j ){
            echo ($i)." ";
        }
        else{
            echo "0 ";
        }
    }
echo "<br>";
}
?>
<br>

<!-- Q6 -->
<?php
$int=5;
$x=1;
for($i=1 ; $i <= $int; $i++){
    $x *= ($i);
}
echo $x;
?>
<br>
<br>

<!-- Q7 -->
<?php
$n=10;
$fibo1=0;
$fibo2=1;
echo $fibo1 . ', ' . $fibo2;
for($i=3 ; $i<= $n ; $i++){
    $calcFibo= $fibo1 + $fibo2;
    echo  ', ' . $calcFibo ;
    $fibo1 = $fibo2;
    $fibo2 = $calcFibo;
}
?>
<br><br>

<!-- Q8  -->
<?php
$str="Orange Coding Academy";
$str = strtolower( $str );
$chartarget="c";
$count= 0;
for($i= 0; $i < strlen($str) ; $i++){
    if($str[$i] === $chartarget){
        $count++;
    }
}
echo $count;
?>
<br><br>

<!-- Q9  -->
<?php
echo '<table border="1" cellpadding="3px" cellspacing="0px">';
for($row = 1 ; $row <=6 ; $row++){
    echo '<tr>';
    for($col=1 ; $col<= 5 ;$col++){
        $multi = $row * $col;
        echo "<td>{$row} * {$col} = {$multi}</td>";
    }
    echo '</tr>';
}
echo '</table>';
?>
<br><br>

<!-- Q10 -->
<?php
for($i = 1 ; $i<=50 ; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "FizzBuzz ";
}
elseif($i % 3 == 0){
    echo "Fizz ";
}
elseif($i % 5 == 0){
    echo "Buzz ";
}
else{
    echo $i ." ";
}
}
?>
<br><br>

<!-- Q11 -->
<?php
$count=1;
for($i=1 ; $i <= 5 ; $i++ ){
    for($j=1 ; $j <= $i ;$j++){
        echo $count . " ";
        $count++;
    }
echo "<br>";
}
?>
<br><br>

<!-- Q12 -->







