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
        return [];
    }


    public static function correctionGenerate(int $n): array
    {
        $primes = [];

        for ($potentialDivider = 2; $potentialDivider <= $n; ++$potentialDivider) {
            while ($n % $potentialDivider === 0) {
                $primes[] = $potentialDivider;
                $n /= $potentialDivider;
            }
        }

        return $primes;
    }

}