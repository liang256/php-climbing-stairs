<?php

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function test_n_is_negative(): void
    {
        $s = new Solution;
        $this->assertEquals(
            0,
            $s->climbStairs(-1)
        );
    }

    public function test_n_is_1(): void
    {
        $s = new Solution;
        $this->assertEquals(
            1,
            $s->climbStairs(1)
        );
    }

    public function test_n_is_2(): void
    {
        $s = new Solution;
        $this->assertEquals(
            2,
            $s->climbStairs(2)
        );
    }

    public function test_n_is_45(): void
    {
        $s = new Solution;
        $this->assertEquals(
            1836311903,
            $s->climbStairs(45)
        );
    }
}