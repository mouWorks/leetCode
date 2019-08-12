<?php
namespace LeetCode\Q28;
use PHPUnit\Framework\TestCase;

/**
 *
 *
 * Class Q28_ImplementStrstrTest
 * @package LeetCode\Q28
 *
 */
class Q28_ImplementStrstrTest extends TestCase
{
    /**
     * @var Solution
     */
    private $solution;

    public function setUp()
    {
        $this->solution = new Solution();
    }

    public function testSample1_Match()
    {
        $haystack = 'hello';
        $needles = 'll';
        $response = $this->solution->strStr($needles, $haystack);
        $this->assertEquals(2, $response);
    }

    public function testSample2_NotFound()
    {
        $haystack = 'aaaaa';
        $needles = 'bba';
        $response = $this->solution->strStr($needles, $haystack);
        $this->assertEquals(-1, $response);
    }

    public function testSample3_ExactSameChar()
    {
        $haystack = 'a';
        $needles = 'a';
        $response = $this->solution->strStr($needles, $haystack);
        $this->assertEquals(0, $response);
    }

    public function testSample4_OverMatch()
    {
        $haystack = 'aaa';
        $needles = 'a';
        $response = $this->solution->strStr($needles, $haystack);
        $this->assertEquals(0, $response);
    }

}

class Solution
{
    /**
     * @param $needles
     * @param $haystack
     *
     * @return Integer
     */
    public function strStr($needle, $haystack)
    {

    }
}