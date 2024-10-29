<?php
function isValid($s) {
    $bracketMap=[
        ')'=>'(',
        '}'=>'{',
        ']'=>'['
    ];
    $stack=[];
    foreach(str_split($s) as $char){
        if(isset($bracketMap[$char])){
            $topElement=array_pop($stack);
            if($topElement!==$bracketMap[$char]){
                return false;
            }
        }
        else{
            $stack[]=$char;
        }
    }
    return empty($stack);
}

$input = "([{}])";
$output = isValid($input);
echo json_encode($output);