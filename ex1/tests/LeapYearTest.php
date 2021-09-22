<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class LeapYearTest extends TestCase
{
    public function testLeap(): void
    {
        $isLeap = LeapYear::isLeap(2024);
        $this->assertEquals(true, $isLeap);
        $isNotLeap = LeapYear::isLeap(2021);
        $this->assertEquals(false, $isNotLeap);
    }

    public function testLeapYears()
    {
        $this->assertEquals(true, LeapYear::isLeap(2016), "2016 est bissextile");
        $this->assertEquals(true, LeapYear::isLeap(2000), "2000 est bissextile");
    }

    public function testNonLeapYears()
    {
        $this->assertEquals(false, LeapYear::isLeap(2015), "2015 n'est pas être bissextile");
        $this->assertEquals(false, LeapYear::isLeap(1900), "1900 ne devrait pas être bissextile");
    }

    public function testLooksValid()
    {
        $this->assertEquals(true, LeapYear::looksValid('2021-09-22'), "not good");
        $this->assertEquals(true, LeapYear::looksValid('1975-12-03'), "not good");
        $this->assertEquals(false, LeapYear::looksValid('2021-9-22'), "not good");
        $this->assertEquals(true, LeapYear::looksValid('1308-12-03'), "not good");
    }

    public function testUrlAllImages()
    {
        $this->assertEquals(true, LeapYear::urlAllImages('https://www.digital-campus.fr/ecole/paris'), "not good");

    }

}
