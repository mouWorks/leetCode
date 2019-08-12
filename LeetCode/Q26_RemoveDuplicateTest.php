<?php
namespace LeetCode\Q26;
use PHPUnit\Framework\TestCase;

/**
 *
 *
 * Class Q14_Palindrome_Number
 * @package LeetCode\Q26
 *
 */
class Q26_RemoveDuplicateTest extends TestCase
{
    /**
     * @var Solution
     */
    private $solution;

    public function setUp()
    {
        $this->solution = new Solution();
    }

    public function testSample1()
    {
        $array = [1,1,2];
        $response = $this->solution->removeDuplicate($array);
        $this->assertEquals(2, $response);
        $this->assertArraySubset([1,2], $array);
    }
    public function testSample2()
    {
        $array = [0,0,1,1,1,2,2,3,3,4];
        $response = $this->solution->removeDuplicate($array);
        $this->assertEquals(5, $response);
        $this->assertArraySubset([0,1,2,3,4], $array);
    }

    public function testSample3()
    {
        $input = [1,2,3,2,1,4,5];
        $this->solution->removeDuplicate($input);
        $this->assertEquals([1,2,3,4,5], $input);
    }
}

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function removeDuplicate(&$nums)
    {

        //Version 1: faster
        $returnArray = array_values(array_unique($nums));
        $nums = $returnArray;

        return count($nums);

        //Version 2: works but slower

        if(FALSE):

            $resultArray = [];
            foreach($nums as $num){

                if( ! in_array($num, $resultArray)){
                    array_push($resultArray, $num);
                }
            }

            $nums = $resultArray;

            return count($resultArray);

        endif;

    }
}