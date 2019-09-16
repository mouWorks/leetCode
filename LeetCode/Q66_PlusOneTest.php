<?php
namespace LeetCode\Q66;
use PHPUnit\Framework\TestCase;

/**
 *
 *
 * Class Q66 TwoSum
 * @package LeetCode\Q66
 *
 */
class Q66_TwoSumTest extends TestCase
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
        $nums = [1,2,3];
        $result = $this->solution->plusOne($nums);
        $this->assertEquals([1,2,4], $result);
    }

    public function test2_Sample2()
    {
        $nums = [9];
        $result = $this->solution->plusOne($nums);
        $this->assertEquals([1,0], $result);
    }

}

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function plusOne($digits)
    {
        $number = implode('', $digits);

        $numInt = intval($number);
        $added = $numInt + 1 ;

        $toString = strval($added);

        


        $toArray = explode('', $toString);

        var_dump($toArray);

        return $toArray;




//        return $added;


//        $size = count($digits);
//
//        $digits[$size-1] += 1;
//
//        return $digits;
    }
}