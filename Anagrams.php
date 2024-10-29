<?php
function groupAnagrams($strs) {
    $anagrams = [];
    foreach($strs as $str){
        $sortedStr=str_split($str);
        sort($sortedStr);
        $key=implode('',$sortedStr);
        if(!isset($anagrams[$key])){
            $anagrams[$key]=[];
        }
        $anagrams[$key][]=$str;
    }
    return array_values($anagrams);
}

$input = ["eat", "tea", "tan", "ate", "nat", "bat"];
$output = groupAnagrams($input);
echo json_encode($output);