<?php
namespace LeetCode\Q14;
use PHPUnit\Framework\TestCase;

/**
 * Q14. Longest Common Prefix
 *
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
    public function getLongestCommonPrefix($strs)
    {

    }
}