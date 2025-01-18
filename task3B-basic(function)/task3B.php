<?php
function checkPrime ($int){
if($int <= 1){
    return false;
}
for($i = 2; $i <= sqrt($int); $i++){
    if($int % $i==0){
        return false;
    }
}
return true;
}

$int=3;
if(checkPrime($int)){
    echo "$int is a prime number.";
}
else{
    echo "$int is Not a prime number.";
}
?>
<br><br>

<!-- Q2 -->

<?php
$str = "remove";
function Reverse($str){
    return strrev($str);
}
echo Reverse($str);
?>
<br><br>

<!-- Q3 -->

<?php 
$str = "remove";
function checkAllstr($str){
    if(ctype_lower($str)){
        return "Your String is Ok"; 
    }
    else{
        return "Your string is Not Ok";
    }
}
echo checkAllstr($str);
?>
<br><br>

<!-- Q4 -->


<?php
function swapVariables($x, $y) {
    $z = $x; 
    $x = $y;    
    $y = $z; 
    return "y = $y , x = $x "; 
}
$x = 12;
$y = 10;
echo swapVariables($x, $y);
?>
<br><br>

<!-- Q6 -->

<?php
$int = 407 ;
function checkArmstrong($int){
    $sum = 0;
    $z= $int;       //تخزين مؤقت للرقم 
    $intcontact = strlen((string) $int); // مجموع عدد الارقام في الرقم 
    while($z > 0 ){
        $digit = $z % 10 ; // لحتى نجيب الرقم الاخير بعد ما فصلناهم 
        $sum += $digit **$intcontact ; 
        $z = intdiv($z , 10); // لحتى نحذف الرقم الاخير
    }
    if($sum === $int){
        return "$int is Armstrong Number";
    }
    else{
        return "$int is Not Armstrong Number";
    }
}
echo checkArmstrong($int);
?>
<br><br>

<!-- Q7 -->

<?php
$str = "Eva, can I see bees in a cave?";
function checkPalindrome($str){
    $strClean = strtolower(preg_replace("/[^a-z0-9]/i" ,"", $str));
    $strRevers = strrev($strClean);
    if($strRevers === $strClean){
        return "Yes, it is a palindrome ";
    }
    else{
        return "No, it is Not a palindrome ";
    }
}
echo checkPalindrome($str);
?>
<br><br>

<!-- Q8 -->

<?php
$array = array(2, 4, 7, 4, 8, 4);
function removeDuplicates($array) {
    return array_values(array_unique($array)); // إزالة المكررات
}
echo "array1 = array(" . implode(", ", removeDuplicates($array)) . ");";
?>
