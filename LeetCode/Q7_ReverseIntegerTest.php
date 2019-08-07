<?php
namespace LeetCode\Q7;
use PHPUnit\Framework\TestCase;

class Q7_ReverseIntegerTest extends TestCase
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
        $int = 123;
        $response = $this->solution->reverseInt($int);
        $this->assertEquals(321, $response);
    }

    public function test_2_負數()
    {
        $int = -123;
        $response = $this->solution->reverseInt($int);
        $this->assertEquals(-321, $response);
    }

    public function test_3_120()
    {
        $int = 120;
        $response = $this->solution->reverseInt($int);
        $this->assertEquals(21, $response);
    }

    public function test_4_1534236469 ()
    {
        $int = 1534236469;
        $response = $this->solution->reverseInt($int);
        $this->assertEquals(0, $response);
    }

}

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function reverseInt($n)
    {
        $boolFlip = $n > 0 ? false : true;

        if($boolFlip){
            $n = $n * -1;
        }

        $reverse = 0;
        while ($n > 0)
        {
            $reverse = $reverse * 10; //之前的尾數 * 10;
            $reverse += $n % 10; //取尾數

            $n = intval($n / 10);
        }

        if($reverse > 2147483647){
            return 0;
        }

        if($boolFlip){
            return $reverse * -1;
        }

        return $reverse;
    }
}