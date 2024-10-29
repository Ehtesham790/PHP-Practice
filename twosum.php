<?php
// function TwoSum($input, $target) {
//     $output = [];
//     for ($i = 0; $i < count($input) - 1; $i++) {
//         for ($j = $i + 1; $j < count($input); $j++) {
//             if ($input[$i] + $input[$j] == $target) {
//                 $output = [$i, $j];
//             }
//         }
//     }
//     return $output; // Move return statement here to ensure it's after both loops
// }

function TwoSum($input, $target) {
    $hashMap=[];
    
    foreach($input as $index=>$value){
        $complement=$target-$value;
        if(isset($hashMap[$complement])){
            return [$hashMap[$complement],$index];
        }
        else{
            $hashMap[$value]=$index;
        }
    }
}

$input = [2, 7, 11, 15];
$target = 9;
$output = TwoSum($input, $target);
echo json_encode($output);