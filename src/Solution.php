<?php

class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        return $this->dfs($n);
    }

    private function dfs($n, &$dp = []): int {
        if (array_key_exists($n, $dp)) {
            return $dp[$n];
        }
        
        if ($n == 0) {
            return 1;
        } elseif ($n < 0) {
            return 0;
        }
        
        $dp[$n] = $this->dfs($n-1, $dp) + $this->dfs($n-2, $dp);
        return $dp[$n];
    }
}