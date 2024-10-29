<?php
function mergeIntervals($intervals) {
    usort($intervals,function($a,$b){
        return $a[0] <=> $b[0];
    });
    $merged=[];
    foreach($intervals as $interval){
        if(empty($merged) || $interval[0] > $merged[count($merged)-1][1]){
            $merged[] = $interval;
        }
        else{
            $merged[count($merged)-1][1]=max($merged[count($merged)-1][1],$interval[1]);
        }
    }
    return $merged;
}
$input = [[1, 3], [2, 6], [8, 10], [15, 18]];
$output=mergeIntervals($input);
// print_r($output);
// var_dump($output);
echo json_encode($output);