<?php
namespace LeetCode\Q14;
use PHPUnit\Framework\TestCase;

/**
 * Q14. Longest Common Prefix
 *
 * 1. 先排除負數
 * 2. <10 的必定為 (如 7 == 7)
 * 3. 餘數為零必不為
 * 4. 最後再用一個 loop 去比對
 *
 *
 * Class Q14_Palindrome_Number
 * @package LeetCode\Q14
 *
 */
class Q14_LongestCommonPrefixTest extends TestCase
{
    /**
     * @var Solution
     */
    private $solution;

    public function setUp()
    {
        $this->solution = new Solution();
    }

    public function test_1_3()
    {
        $input = ['flower', 'flow', 'flight'];
        $response = $this->solution->getLongestCommonPrefix($input);
        $this->assertEquals('fl', $response);
    }

    public function test_2_4()
    {
        $input = ['dog','racecar','car'];
        $response = $this->solution->getLongestCommonPrefix($input);
        $this->assertEquals('', $response);
    }

//    public function test_3_9()
//    {
//        $int = "IX";
//        $response = $this->solution->getLongestCommonPrefix($int);
//        $this->assertEquals(9, $response);
//    }

}

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function getLongestCommonPrefix($s)
    {
        $result = '';
//        $itemCount = count($s);
        for($i=0; $i < 999999; $i++){

            $target = '';

            foreach($s as $key => $value){

                if($key == 0){
                    $target = $value[$i];
                }

                if($value[$i] != $target){
                    continue;
                }

                $result .= $target;
            }
        }

        return $result;


    }
}