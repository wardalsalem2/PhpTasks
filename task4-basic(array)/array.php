<!-- Q1 -->
<?php
$colors = array("red","green","white");
echo "The memory of that scene for me is like a
frame of film forever frozen at that moment: the {$colors[0]}  carpet,
the {$colors[1]} lawn, the {$colors[2]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
?>
<br>

<!-- Q2 -->
<?php
$colors = array("red","green","white");
echo "<ul>
<li> {$colors[0]}</li>
<li> {$colors[1]}</li>
<li> {$colors[2]}</li>
</ul>
";
?>
<br>

<!-- Q3 -->
<?php


function getInfo($country){
    $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
    echo "The capital of ". $country . " is ". $cities[$country]."<br>"; 
}
getInfo("Netherlands"); 
getInfo("Greece") ;
getInfo("Germany");
?>
<br><br>

<!-- Q3 B -->
<?php
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
asort($cities);
foreach ($cities as $x => $y) {
echo " The capital of $x  is $y <br>";}
?>
<br><br>

<!-- Q4 -->
<?php
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];
?>
<br><br>

<!-- Q5 -->
<?php
$number= array(1,2,3,4,5);
$location= 3;
$NewItem="$";
array_splice($number ,$location, 0, $NewItem);
echo implode(" ",  $number);
?>
<br>
<br>

<!-- Q6 -->
<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort( $fruits );
foreach ($fruits as $x => $y ) {
    echo $x ,"=", $y ,'<br>';
}
?>
<br><br>

<!-- Q7 -->
<?php
$num = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
sort($num);
$average = array_sum($num) / count($num);
echo $average . "<br>";

echo "List of five lowest temperatures: ";
for ($i = 0; $i < 5; $i++) {
    echo $num[$i];
    if ($i < 4) {
        echo ", ";
    }
}
echo "<br>";
echo "List of five highest temperatures: ";
for ($i = count($num) - 5; $i < count($num); $i++) {
    echo $num[$i];
    if ($i < count($num) - 1) {
        echo ", ";
    }
}
echo "<br>";
?>
<br><br>

<!-- Q8 -->
<?php
$arr1 = array("color" => "red", 2, 4);
$arr2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$totarr = array_merge($arr1, $arr2);
echo "<pre>";
print_r($totarr);
echo "</pre>";
?>
<br><br>

<!-- Q9 -->
<?php
$colors = array("red","blue", "white","yellow");
$upper = array_map('strtoupper', $colors);
echo "<pre>";
print_r($upper);
echo "</pre>";
?>
<br><br>

<!-- Q10 -->
<?php
$colors = array("RED","BLUE", "WHITE","YELLOW");
$lower = array_map('strtolower', $colors);
echo "<pre>";
print_r($lower);
echo "</pre>";
?>
<br><br>

<!-- Q11 -->
<?php
$num = 200;
while($num < 250){
    echo "  $num,";
    $num += 4;
}
?>
<br><br>

<!-- Q12 -->
<?php
$words = array("abcd","abc","de","hjjj","g","wer");
$length = array_map('strlen', $words);

$longest = max($length);
$shortest = min($length);
echo "The shortest array length is {$shortest}. The longest array length is {$longest}.";
?>
<br><br>

<!-- Q13 -->

<?php
$min = 11;
$max = 20;
$uniqueNumbers = [];
while (count($uniqueNumbers) < 10) {
    $randomNumber = rand($min, $max);
    if (!in_array($randomNumber, $uniqueNumbers)) {
        $uniqueNumbers[] = $randomNumber; 
    }
}
echo implode(" ", $uniqueNumbers);
?>
<br><br>

<!-- Q14 -->

<?php
$array1 = array(2, 0, 10, 12, 6);
$filterArr1 = array_filter($array1);
$smallest = min($filterArr1);
echo $smallest;
?>
<br><br>

<!-- Q15 -->

<?php
$Array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
rsort($Array);
print_r($Array);
?>
<br><br>

<!-- Q16 -->

<?php
function floorDecimal($number, $precision, $separator) {
    $factor = pow(10, $precision);
    $floored = floor($number * $factor) / $factor;
    return str_replace('.', $separator, (string)$floored);
}
echo floorDecimal(1.155, 2, ".") . "<br>";
echo floorDecimal(100.25781, 4, ".") . "<br>";
echo floorDecimal(-2.9636, 3, ".") . "<br>";   
?>
<br><br>

<!-- Q17 -->

<?php
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
$array1 = explode(', ', $list1);
$array2 = explode(', ', $list2);
$resultArray = array_unique(array_merge($array1, $array2));
$result = implode(', ', $resultArray);
echo $result;
?>
<br><br>

<!-- Q18 -->

<?php
$input = "4, 5, 6, 7, 4, 7, 8";
$output = implode(', ', array_unique(explode(', ', $input)));
echo $output;
?>
<br><br>

<!-- Q19 -->

<?php
$array1 = ['a', '1', '2', '3', '4'];
$array2 = ['a', '3'];
if (empty(array_diff($array2, $array1))) {
    echo "array2 is a subset of array1";
} else {
    echo "array2 is not a subset of array1";
}
?>



