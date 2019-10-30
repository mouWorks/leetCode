<?php
namespace LeetCode\Q20;
use PHPUnit\Framework\TestCase;

/**
 *
 *
 * Class Q20 TwoSum
 * @package LeetCode\Q20
 *
 */
class Q20_ValidParentheses extends TestCase
{
    /**
     * @var Solution
     */
    private $solution;

    public function setUp()
    {
        $this->solution = new Solution();
    }

    public function test1_Sample1_True()
    {
        $target = "()";
        $result = $this->solution->validParentheses($target);
        $this->assertEquals(true, $result);
    }

    public function test2_Sample2_True()
    {
        $target = "()[]{}";
        $result = $this->solution->validParentheses($target);
        $this->assertEquals(true, $result);
    }

    public function test3_Sample3_False()
    {
        $target = "(]";
        $result = $this->solution->validParentheses($target);
        $this->assertEquals(false, $result);
    }

    public function test4_Sample4_False()
    {
        $target = "([)]";
        $result = $this->solution->validParentheses($target);
        $this->assertEquals(false, $result);
    }

    public function test5_Sample5_True()
    {
        $target = "{[]}";
        $result = $this->solution->validParentheses($target);
        $this->assertEquals(true, $result);
    }

    public function test6_Sample6_False()
    {
        $target = "(";
        $result = $this->solution->validParentheses($target);
        $this->assertEquals(false, $result);
    }

    public function test7_Sample7_False()
    {
        $target = "()[";
        $result = $this->solution->validParentheses($target);
        $this->assertEquals(false, $result);
    }

    public function test8_Sample8_False()
    {
        $target = "";
        $result = $this->solution->validParentheses($target);
        $this->assertEquals(true, $result);
    }

    public function test9_Sample9_False()
    {
        $target = "(([]){})";
        $result = $this->solution->validParentheses($target);
        $this->assertEquals(true, $result);
    }


}


class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function validParentheses($target)
    {
        $checkField = [
            '(' => ')',
            '[' => ']',
            '{' => '}',
            ')' => '(',
            ']' => '[',
            '}' => '{'
        ];

        $targetArray = str_split($target);
        $size = count($targetArray);

        if(empty($target)){
            return true;
        }

        if($size % 2 == 1){
            return false;
        }

        for($i=0; $i < $size-1; $i++){

            $currentMask = $checkField[$targetArray[$i]];
            $next = $targetArray[$i+1];
            $last = $targetArray[$size-$i-1];

            if($currentMask == $next){
                $i++;
                continue;
            }else{
                if($currentMask != $last){
                    return false;
                }
            }
        }

        return true;
    }
}