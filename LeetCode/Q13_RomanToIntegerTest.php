<?php
namespace LeetCode\Q13;
use PHPUnit\Framework\TestCase;

/**
 * Q13. 羅馬數字計算
 *
 * 1. 由最右邊 Loop 走回來
 * 2. 當下的值, 和前一個值相比
 *    a. 當下的值比前一個小 -> 則 加上一個負數
 *    b. 當下的值比前一個大 -> 則 加上一個正數
 *
 * Class Q13_RomanToIntegerTest
 * @package LeetCode\Q13
 *
 */
class Q13_RomanToIntegerTest extends TestCase
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
        $int = "III";
        $response = $this->solution->romanToInt($int);
        $this->assertEquals(3, $response);
    }

    public function test_2_4()
    {
        $int = "IV";
        $response = $this->solution->romanToInt($int);
        $this->assertEquals(4, $response);
    }

    public function test_3_9()
    {
        $int = "IX";
        $response = $this->solution->romanToInt($int);
        $this->assertEquals(9, $response);
    }

    public function test_4_58()
    {
        $int = "LVIII";
        $response = $this->solution->romanToInt($int);
        $this->assertEquals(58, $response);
    }

    public function test_5_1994()
    {
        $int = "MCMXCIV";
        $response = $this->solution->romanToInt($int);
        $this->assertEquals(1994, $response);
    }
}

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        $valueArray = [
          'I' => 1,
          'V' => 5,
          'X' => 10,
          'L' => 50,
          'C' => 100,
          'D' => 500,
          'M' => 1000
        ];

        $length = strlen($s);

        $total = 0;
        $prev  = $valueArray[$s[$length-1]];

        for($i = $length-1 ; $i >= 0; $i --){

            $current = $valueArray[$s[$i]];

            //第一筆
            if($i == $length-1){
                $total = $current;
            }else{

                if($current < $prev){
                    $total = $total - $current;
                }else{
                    $total = $total + $current;
                }
            }

            $prev = $current; //重新Assign
        }

        return $total;
    }
}