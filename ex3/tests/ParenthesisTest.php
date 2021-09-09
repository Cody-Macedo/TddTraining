<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ParenthesisTest extends TestCase
{
    public function testGoodParenthesis()
    {
        $this->assertEquals(true, Parenthesis::isGoodParenthesis("(foo(bar))"));
        $this->assertEquals(true, Parenthesis::isGoodParenthesis(""));
        $this->assertEquals(true, Parenthesis::isGoodParenthesis("()"));
        $this->assertEquals(true, Parenthesis::isGoodParenthesis("foo"));
    }

    public function testNotGoodParenthesis()
    {
        $this->assertEquals(false, Parenthesis::isGoodParenthesis("((foo)"));
        $this->assertEquals(false, Parenthesis::isGoodParenthesis("())"));
    }
    public function testSpecialCase()
    {
        $this->assertEquals(false, Parenthesis::isGoodParenthesis(")(()"));
    }

    public function testSpecialCaseTwo()
    {
        $this->assertEquals(false, Parenthesis::isGoodParenthesis("())"));
    }

    public function testSecondeSpecialCaseThree()
    {
        $this->assertEquals(true, Parenthesis::isGoodParenthesis("(ab)a"));
    }



}