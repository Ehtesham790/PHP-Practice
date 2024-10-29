<?php
function spiralOrder($matrix) {
    if (empty($matrix)) return [];
    
    $result = [];
    $top = 0;
    $bottom = count($matrix) - 1;
    $left = 0;
    $right = count($matrix[0]) - 1;
    
    while ($top <= $bottom && $left <= $right) {
        // Traverse from left to right across the top row
        for ($i = $left; $i <= $right; $i++) {
            $result[] = $matrix[$top][$i];
        }
        $top++;
        
        // Traverse from top to bottom along the right column
        for ($i = $top; $i <= $bottom; $i++) {
            $result[] = $matrix[$i][$right];
        }
        $right--;
        
        // Traverse from right to left across the bottom row, if there's still a row left
        if ($top <= $bottom) {
            for ($i = $right; $i >= $left; $i--) {
                $result[] = $matrix[$bottom][$i];
            }
            $bottom--;
        }
        
        // Traverse from bottom to top along the left column, if there's still a column left
        if ($left <= $right) {
            for ($i = $bottom; $i >= $top; $i--) {
                $result[] = $matrix[$i][$left];
            }
            $left++;
        }
    }
    
    return $result;
}

// Example usage:
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
print_r(spiralOrder($matrix)); // Output: [1, 2, 3, 6, 9, 8, 7, 4, 5]