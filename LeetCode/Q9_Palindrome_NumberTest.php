<?php
namespace LeetCode\Q9;
use PHPUnit\Framework\TestCase;

/**
 * Q9: Palindrome Number (正反讀都一樣的數字)
 *
 * 1. 先排除負數
 * 2. <10 的必定為 (如 7 == 7)
 * 3. 餘數為零必不為
 * 4. 最後再用一個 loop 去比對
 *
 *
 * Class Q9_Palindrome_Number
 * @package LeetCode\Q9
 *
 */
class Q9_Palindrome_NumberTest extends TestCase
{
    /**
     * @var Solution
     */
    private $solution;

    public function setUp()
    {
        $this->solution = new Solution();
    }

    public function test_1_正數()
    {
        $int = 121;
        $response = $this->solution->isPalindrome($int);
        $this->assertEquals(true, $response);
    }

    public function test_2_負數()
    {
        $int = -121;
        $response = $this->solution->isPalindrome($int);
        $this->assertEquals(false, $response);
    }

    public function test_3_錯誤()
    {
        $int = 10;
        $response = $this->solution->isPalindrome($int);
        $this->assertEquals(false, $response);
    }

    public function test_4_零為True()
    {
        $int = 0;
        $response = $this->solution->isPalindrome($int);
        $this->assertEquals(true, $response);
    }

    public function test_5_1為True()
    {
        $int = 1;
        $response = $this->solution->isPalindrome($int);
        $this->assertEquals(true, $response);
    }

    public function test_5_11為True()
    {
        $int = 11;
        $response = $this->solution->isPalindrome($int);
        $this->assertEquals(true, $response);
    }

}

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function isPalindrome($n)
    {
        if ($n < 0){
            return false;
        }

        if( $n < 10 ){
            return true;
        }

        if( $n % 10 == 0 ){
            return false;
        }

        $nString = strval($n);
        $size = strlen($nString);

        for($i = 0 ; $i < $size ; $i++){

            if($nString[$i] != $nString[$size-$i-1]){
                return false;
            }
        }

        return true;
    }
}