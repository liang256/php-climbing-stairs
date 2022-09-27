<?php

class Solution
{
    /**
     * @param  Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        if ($n < 0) {
            return 0;
        } elseif ($n <= 1) {
            return 1;
        }
        
        $prev1 = 1; // f(0) = 1
        $prev2 = 1; // f(1) = 1

        // when n >= 2, f(n) = f(n-1) + f(n-2)
        for ($i = 2; $i <= $n; $i++) {
            $tmp = $prev1 + $prev2;
            $prev1 = $prev2;
            $prev2 = $tmp;
        }
        return $prev2;
    }
}