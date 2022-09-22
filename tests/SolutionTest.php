<?php

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testNegitive(): void
    {
        $s = new Solution;
        $this->assertEquals(
            0,
            $s->climbStairs(-1)
        );
    }

    public function test1(): void
    {
        $s = new Solution;
        $this->assertEquals(
            1,
            $s->climbStairs(1)
        );
    }

    public function test2(): void
    {
        $s = new Solution;
        $this->assertEquals(
            2,
            $s->climbStairs(2)
        );
    }

    public function test45(): void
    {
        $s = new Solution;
        $this->assertEquals(
            1836311903,
            $s->climbStairs(45)
        );
    }
}