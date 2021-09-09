<?php declare(strict_types=1);

final class PrimeFactors
{

    public static function generate(int $nb): array
    {
        $facteursPremiers = array();
        if ($nb >= 2) {
            for ($i = 2; $i <= $nb; $i++) {
                if ($nb % $i == 0) {
                    array_push($facteursPremiers, $i);
                    return array_merge($facteursPremiers, self::generate($nb / $i));
                }
            }
        } else {
            return [];
        }
    }

}