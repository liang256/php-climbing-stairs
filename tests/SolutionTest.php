<?php

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testNIs2(): void
    {
        $s = new Solution;
        $this->assertEquals(
            2,
            $s->climbStairs(2)
        );
    }

    public function testNIs45(): void
    {
        $s = new Solution;
        $this->assertEquals(
            1836311903,
            $s->climbStairs(45)
        );
    }
}