<?php
namespace LeetCode\Q28;
use PHPUnit\Framework\TestCase;

/**
 *
 *
 * Class Q28 Implemement StrStr
 * @package LeetCode\Q26
 *
 */
class Q28_implementStrStrTests extends TestCase
{
    /**
     * @var Solution
     */
    private $solution;

    public function setUp()
    {
        $this->solution = new Solution();
    }

    public function test_1()
    {
        $haystack = 'hello';
        $needle = 'll';

        $result = $this->solution->strStr($haystack, $needle);

        $this->assertEquals(2,$result);
    }

    public function test_2()
    {
        $haystack = 'aaaaa';
        $needle = 'bba';

        $result = $this->solution->strStr($haystack, $needle);

        $this->assertEquals( -1,$result);
    }

    public function test_3()
    {
        $haystack = '';
        $needle = 'a';

        $result = $this->solution->strStr($haystack, $needle);

        $this->assertEquals( -1,$result);
    }

    public function test_4()
    {
        $haystack = '';
        $needle = '';

        $result = $this->solution->strStr($haystack, $needle);

        $this->assertEquals( 0,$result);
    }

    public function test_5()
    {
        $haystack = 'a';
        $needle = 'a';

        $result = $this->solution->strStr($haystack, $needle);

        $this->assertEquals( 0,$result);
    }

}

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function strStr($haystack, $needle) {

        if($haystack == $needle){
            return 0;
        }

        if(strlen($needle) == 0){
            return 0;
        }







        return -1;
    }
}