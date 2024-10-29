<?php
function productExceptSelf($nums) {
    $length=count($nums);
    $output=array_fill(0,$length,1);
    for($i=1;$i<$length;$i++){
        $output[$i]=$output[$i-1]*$nums[$i-1];
    }
    $R=1;
    for($i=$length-1;$i>=0;$i--){
        $output[$i]*=$R;
        $R*=$nums[$i];
    }
    return $output;
}
$input = [1, 2, 3, 4];
$output = productExceptSelf($input);
echo json_encode($output);