<?php

class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if ($n < 0) {
            return 0;
        } elseif ($n <= 1) {
            return 1;
        }
        $prev1 = 1;
        $prev2 = 1;
        for ($i = 2; $i <= $n; $i++) {
            $tmp = $prev1 + $prev2;
            $prev1 = $prev2;
            $prev2 = $tmp;
        }
        return $prev2;
    }
}