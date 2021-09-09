<?php declare(strict_types=1);

final class LeapYear
{

    public static function isLeap(int $year): bool
    {
        if ($year % 400 === 0) {
            return true;
        } else if ($year % 100 === 0) {
            return false;
        } else if ($year % 4 === 0) {
            return true;
        }

        return false;

    }
}