<!DOCTYPE html>
<html>

<body>

    <?php
$txt = " PHP ttt ";
echo "I love $txt!<br>";
echo strlen($txt) . "<br>";
echo strtolower($txt) . "<br>";
echo strtoupper($txt) . "<br>";
echo strpos($txt,"H")."<br>";
echo substr($txt,1,2)."<br>";
echo str_replace("PHP","JS",$txt)."<br>";
echo strrev($txt)."<br>";
echo trim($txt)."<br>";
print_r(explode(" ",$txt));
echo "<br>";
$arr = ["apple", "banana", "cherry"];
echo implode(" ",$arr)."<br>";
echo count($arr)."<br>";
$arr1=[1,2];
$arr2=[3,4];
print_r(array_merge($arr1,$arr2));
echo "<br>";
print_r(array_push($arr,1));
echo "<br>";
print_r($arr);
echo "<br>";
print_r(array_pop($arr));
echo "<br>";
array_shift($arr);
print_r($arr);
echo "<br>";
array_unshift($arr,1);
print_r($arr);
echo "<br>";
echo in_array(2,$arr);
echo "<br>";
$arr = ["a" => 1, "b" => 2, "c" => 3];
print_r(array_keys($arr));
echo "<br>";
print_r(array_values($arr));
echo "<br>";
$result=array_map(function($a){
    return $a*2;
},$arr);
print_r($result);
$newresult=array_filter($arr,function($a){
    return $a%2==0;
});
echo "<br>";
print_r($newresult);
$sum=array_reduce($arr,function($carry,$item){
    return $carry+$item;
},0);
echo "<br>";
echo $sum;
?>

</body>

</html>