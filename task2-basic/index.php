<?php
function LeapYear($year) {
    if($year%400== 0 && $year%100!= 0 || $year%4==0) {
        return true;
    } else {
            return false;
        }
}
$year = 2013;
if (LeapYear($year)){
echo "leap Year";
}
else {
    echo "not leap Year";
}
?>
<br>

<!-- Q2.. -->
<?php
$temp = 27;
function checkseson ( $temp) {
if ($temp >20 ){
    echo " It's a winter sesson";
}
else {
    echo "It's a summer sesson";
}
}
checkseson ( $temp)
?>
<br>
<!-- Q3.. -->

<?php
$int1=2;
$int2= 2;
if($int1 === $int2){
echo ($int1 + $int2)*3;
}
else {
echo $int1 + $int2;
}
?>
<br>

<!-- Q4.. -->
<?php
$int1=10;
$int2= 10;
$sum = $int1 + $int2 ;
if($sum === 30) {
    echo $sum;
}
else {
    echo "false";
}
?>
<br>

<!-- Q5 -->
<?php
$int=20;
if( $int > 0 && $int % 3 == 0){
    echo "true, it's a multiple of 3";
}else{
    echo "false, it's not a multiple of 3";
}
?>
<br>

<!-- Q6 -->
<?php
$int= 50;
if( $int >= 20 && $int <=50){
echo "true";
}
else {
echo "false";   
}
?>
<br>

<!-- Q7.. -->
<?php
$numbers = max([65,1,5,9,35]);
echo $numbers;
?>
<br>

<!-- Q8.. -->
<?php
$bill = 50;
if($bill <= 50){
    echo($bill * 2.5 ) . "JOD";
}
elseif($bill <= 150){
    echo ($bill * 5) . "JOD"; 
} 
elseif($bill <= 250){
    echo ($bill * 6.2) . "JOD";
}
elseif($bill >250){
    echo ($bill * 7.5) ."JOD";
}
?>
<br>

<!-- Q9.. -->
<?php
$int1 = 2;
$int2 = 4;
$option = "division";

$Addition = $int1 + $int2;
$Multiplication = $int1 * $int2;
$Division = $int1 / $int2;
$Subtraction = $int1 - $int2;

if ($option === "addition") {
    echo "Addition: " . $Addition . "<br>";
}
elseif ($option === "multiplication") {
    echo "Multiplication: " . $Multiplication . "<br>";
}
elseif ($option === "division") {
    echo "Division: " . $Division . "<br>";
}
elseif ($option === "subtraction") {
    echo "Subtraction: " . $Subtraction . "<br>";
} else {
    echo "Invalid operation.";
}
?>



<!-- Q10.. -->
<?php
$age = 30;
if($age <= 18){
    echo "Not eligible to vote";
}
else{
    echo "You can vote";
}
?>
<br>

<!-- Q11 -->
<?php
$num = -60;
if($num <=0){
    echo "Negative";
}
else{
    echo "Positive";
}
?>
<br>

<!-- Q12 -->
<?php
$numb = [60,86,95,63,55,74,79,62,50];
$average = array_sum($numb) / count($numb);

if ($average < 60){
echo "F";
}
elseif ($average < 70) {
echo "D";
} 
elseif ($average < 80) {   
echo "C";
} 
elseif ($average < 90) {   
echo "B";
} 
else if ($average <100) {
echo "A";}
?>






