<?php
namespace LeetCode\Q136;
use PHPUnit\Framework\TestCase;

/**
 *
 *
 * Class Q1 TwoSum
 * @package LeetCode\Q1
 *
 */
class Q1_TwoSumTest extends TestCase
{
    /**
     * @var Solution
     */
    private $solution;

    public function setUp()
    {
        $this->solution = new Solution();
    }

    public function test1_Sample1()
    {
        $nums = [2,2,1];
        $result = $this->solution->single($nums);
        $this->assertEquals(1, $result);
    }

    public function test2_Sample2()
    {
        $nums = [4,1,2,1,2];
        $result = $this->solution->single($nums);
        $this->assertEquals(4, $result);
    }

}

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function single($nums)
    {
        return 1;
    }
}