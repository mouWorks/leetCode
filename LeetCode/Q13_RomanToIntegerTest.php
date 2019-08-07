<?php
namespace LeetCode\Q13;
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
 * @package LeetCode\Q7
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

//    public function test_5_11為True()
//    {
//        $int = 11;
//        $response = $this->solution->romanToInt($int);
//        $this->assertEquals(true, $response);
//    }

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