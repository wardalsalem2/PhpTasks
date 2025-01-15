<!-- Q1...a -->
<?php
$str1 = "Hello, this is a PHP";
echo strtoupper( $str1 );
?>

<!-- Q1 .. b -->
<br>
 <?php
$str2 = "Hello, this is a PHP";
echo strtolower( $str2 );
?>
<br>

<!-- Q1 .. c -->
<?php
$str3 = "Hello, this is a PHP!";
echo ucfirst($str3) ;
?>
<br>

<!-- Q1 .. d -->
<?php
$str4 = "Hello, this is a PHP!";
echo ucwords($str4) ;
?>
<br>
<br>

<!-- Q2 ..   -->
<?php
$str5 ="085119";
$wa = str_split($str5,2);
echo $wa[0].':'.$wa[1].':'.$wa[2];
?>
<br><br>

<!-- Q3.. -->
<?php
$str = 'I am a full stack developer at orange coding academy';
if (strpos($str, 'Orange') !== false) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}
?>
<br><br>

<!-- Q4.. -->
<?php 
$path = "C:\xampp\htdocs\phpbasic\index.php"; 
$name = basename($path); 
echo $name; 
?>
<br><br>

<!-- Q5.. -->
<?php 
$email = 'info@orange.com'; 
$username = strstr($email, '@', true); 
echo $username; 
?>
<br><br>

<!-- Q6.. -->
<?php
$str1 = 'info@orange.com';   
echo substr($str1, -3)."\n";  
?>
<br><br>

<!-- Q7.. -->
<?php
function generate($chars){
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data),0,$chars);
}
echo generate(8);
?>
<br><br>

<!-- Q8.. -->
<?php
$str = 'That new trainee is so genius.';
$pattern = "/That/i";
$replace = "The";
$newStr= preg_replace($pattern, $replace, $str);
echo $newStr ;
?>
<br><br>

<!-- Q9.. -->
<?php
$str1 = 'dragonboll';
$str2 = 'dragonball';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
    $str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>
<br><br>

<!-- Q10.. -->
<?php  
$str = "Twinkle, twinkle, little star.";
$array = preg_split('/(?<=,|\s)(?=\S)/', $str);
var_dump($array);
?>
<br><br>

<!-- Q11.. -->
<?php
$cha = 'a';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) {
$next_cha = $next_cha[0];
}
echo $next_cha;
?>
<br><br>

<!-- Q12.. -->
<?php
$str = 'The brown fox';
$insertStr = 'quick';
$position = 4; 
$newString = substr($str, 0, $position) . ' ' . $insertStr . ' ' . substr($str, $position);
echo $newString;
?>
<br><br>

<!-- Q13.. -->
<?php
$str = '0000657022.24';
$str = ltrim($str, "0"); 
echo $str;
?>
<br><br>

<!-- Q14.. -->
<?php
$str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $str);
?>
<br><br>

<!-- Q15 -->
<?php
$str = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($str, '-');
?>
<br><br>

<!-- Q16.. -->
<?php
$str = '\"\1+2/3*2:2-3/4*3';
$remove = preg_replace('/[^0-9 ]/', '', $str);
echo $remove;
?>
<br><br>

<!-- Q17 -->
<?php
$str = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $str), 0, 5));
?>
<br><br>

<!-- Q18.. -->
<?php
$str = "2,543.12";
$remove = str_replace( ',', '', $str);
echo $remove;
?>
<br><br>

<!-- Q19.. -->
<?php
for ($x = ord('a',); $x <= ord('z'); $x++) {
echo chr($x).' ';
}
?>












