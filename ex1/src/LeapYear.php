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

    public static function looksValid($date): bool
    {
        $regex = '/[0-9]{4}-[0-9]{2}-[0-9]{2}/';
        $value = preg_match($regex, $date);
        if ($value) {
            return true;
        } else {
            return false;
        }

//        var_dump($matches);
//        if (!empty($matches)) {
//            $dateArray = explode("-", $date);
//
//            if ((int)$dateArray[0] > 1500){
//                if((int)$dateArray[1] < 13){
//
//                }else{
//                    return false;
//                }
//            }else{
//                return false;
//            }
//        } else {
//            return false;
//        }
//        return true;
    }

    public static function urlAllImages($url): array
    {

        $regex = '/^<img.*src="(.+?)".*">/';
        preg_match($regex, $url, $matches);
        var_dump($matches);
        return $matches;

    }
}