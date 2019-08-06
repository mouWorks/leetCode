<?php
namespace LeetCode\Q7;
use PHPUnit\Framework\TestCase;

class Q9_Palindrome_Number extends TestCase
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

}

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function isPalindrome($n)
    {
        if( $n < 0 ){
            return false;
        }

        if( $n % 10 == 0 ){
            return false;
        }








        return true;
    }
}