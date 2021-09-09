<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    public function testOne()
    {
        $this->assertEquals([], PrimeFactors::generate(1), "1 n'a pas de facteur premier");
    }

    public function testTwo()
    {
        var_dump("***", PrimeFactors::generate(2));
        $this->assertEquals([2], PrimeFactors::generate(2), "2 a un seul facteur premier");
    }

    public function testThree()
    {
        var_dump("***", PrimeFactors::generate(3));
        $this->assertEquals([3], PrimeFactors::generate(3), "3 a un seul facteur premier");
    }

    public function testFour()
    {
        var_dump("***", PrimeFactors::generate(4));
        $this->assertEquals([2, 2], PrimeFactors::generate(4), "4 a 2 facteurs premiers");
    }

    public function testCorrection()
    {
        $this->assertEquals([3, 3], PrimeFactors::correctionGenerate(9));
    }
}