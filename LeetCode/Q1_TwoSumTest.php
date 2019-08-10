<?php
namespace LeetCode\Q1;
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
        $nums = [2, 7, 11, 15];
        $target = 9;
        $result = $this->solution->twoSum($nums, $target);
        $this->assertEquals([0,1], $result);
    }

    public function test2_Sample2()
    {
        $nums = [3,2,4];
        $target = 6;
        $result = $this->solution->twoSum($nums, $target);
        $this->assertEquals([1,2], $result);
    }

}

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function twoSum($nums, $target)
    {
        $size = count($nums);
        for($i=0;$i<$size;$i++){

            for($j=0; $j<$size; $j++){
                if($i != $j){
                    $sum = $nums[$i] + $nums[$j];

                    if($sum == $target){
                        return [$i, $j];
                    }
                }
            }
        }
    }
}