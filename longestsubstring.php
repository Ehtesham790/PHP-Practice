<?php
function lengthOfLongestSubstring($s) {
    $charIndex=[];
    $maxlength=0;
    $start=0;
    for($i=0;$i<strlen($s);$i++){
        $char=$s[$i];
        if(isset($charIndex[$char]) && $charIndex[$char] >= $start){
            $start=$charIndex[$char]+1;
        }
        $charIndex[$char]=$i;

        $maxlength=max($maxlength,$i-$start+1);
    }

    return $maxlength;
}
$input = "abcabcbb";
$output = lengthOfLongestSubstring($input);
echo $output; // Output: 3