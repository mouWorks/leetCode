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
class Q136_SingleNumberTest extends TestCase
{
    /**
     * @var Solution
     */
    private $solution;

    public function setUp()
    {
        $this->solution = new Solution();
    }

//    public function test1_Sample1()
//    {
//        $nums = [2,2,1];
//        $result = $this->solution->single($nums);
//        $this->assertEquals(1, $result);
//    }

    public function test2_Sample2()
    {
        $nums = [4,1,2,1,2];
        $result = $this->solution->single($nums);
        $this->assertEquals(4, $result);
    }

    public function test3_Sample3()
    {
        $nums = [1,3,1,-1,3];
        $result = $this->solution->single($nums);
        $this->assertEquals(-1, $result);
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
        $size = count($nums);

        for($i=0;$i<$size;$i++){
            for($j=$i+1;$j<$size;$j++){
                echo 'i:' . $i . ',j:' . $j . '|';
                if($nums[$i] == $nums[$j]){
                   unset($nums[$i]);
                   unset($nums[$j]);
                   $size -= 2;
                   //$nums = array_values($nums);
                }
            }
        }
        $result = array_values($nums);
        return $result[0];
    }
}