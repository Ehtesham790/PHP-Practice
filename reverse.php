<?php
$name="Asad";
if($name==strrev($name)){
    echo "palindrome";
}
else{
    echo "not a palindrome";
}
echo "<br>";
for($i=strlen($name)-1;$i>=0;$i--){
    echo $name[$i];
}
$arr=[1, 3, 5, 7, 9];
$max=max($arr);
echo "<br>";
echo $max;
$arrmax=0;
foreach($arr as $value){
    if($value>$arrmax){
        $arrmax=$value;
    }
}
echo "<br>";
echo $arrmax;

$number=5;
$factorial=1;
while($number>0){   
    $factorial=$factorial*$number;
    $number--;
}
echo "<br>";
echo $factorial;

$sequence=[];
$a=0;
$b=1;
for($i=0;$i<10;$i++){
    $sequence[]=$a;
    $next=$a+$b;
    $a=$b;
    $b=$next;
}
echo "<br>";
print_r($sequence);

$num="12345";
$sum=0;
for($i=0;$i<strlen($num);$i++){
    $sum+=(int)$num[$i];
}       
echo "<br>";
echo $sum;
$minprime=10;
$maxprime=20;
$primearray=[];
for($i=$minprime;$i<=$maxprime;$i++){
    if($i<2){
        return false;
    }
    $isPrime=true;
    for($j=2;$j<sqrt($i);$j++){
        if($i%$j==0){
            $isPrime=false;
            break;
        }
    }
    if($isPrime){
        $primearray[]= $i;
    }
}   
echo "<br>";
print_r($primearray);
$countvowel="Hello";
$vowels=0;
$consonants=0;
$vowelsarray=["a","e","i","o","u"];
for($i=0;$i<strlen($countvowel);$i++){
    if(in_array($countvowel[$i],$vowelsarray)){
        $vowels++;
    }
    else{
        $consonants++;
    }
}
echo "<br>";
echo "Vowels: $vowels";
echo "<br>";
echo "Consonants: $consonants";
$secondarray=[5,2,2,3,4,1];
$secondarray=array_unique($secondarray);
echo "<br>";
print_r($secondarray);
sort($secondarray);
echo "<br>";
print_r($secondarray);