<?php
namespace LeetCode\Q38;
use PHPUnit\Framework\TestCase;

/**
 * Q38. Longest Common Prefix
 *
 * 1. 先排除負數
 * 2. <10 的必定為 (如 7 == 7)
 * 3. 餘數為零必不為
 * 4. 最後再用一個 loop 去比對
 *
 *
 * Class Q38_Palindrome_Number
 * @package LeetCode\Q38
 *
 */
class Q38_CountAndSay extends TestCase
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
        $response = $this->solution->countAndSay($input);
        $this->assertEquals('fl', $response);
    }

    public function test_2_4()
    {
        $input = ['dog','racecar','car'];
        $response = $this->solution->countAndSay($input);
        $this->assertEquals('', $response);
    }

//    public function test_3_9()
//    {
//        $int = "IX";
//        $response = $this->solution->countAndSay($int);
//        $this->assertEquals(9, $response);
//    }

}

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function countAndSay($s)
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

                if(empty($target)){
                    break;
                }
            }




        }

        return $result;


    }
}