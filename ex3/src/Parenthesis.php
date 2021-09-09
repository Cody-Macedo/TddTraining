<?php declare(strict_types=1);

final class Parenthesis
{

    public static function isGoodParenthesis(string $text)
    {
        $arrText = str_split($text);
        $countGood = 0;
        for ($i = 0; $i < count($arrText); $i++) {
            if ($arrText[$i] === "(") {
                $countGood += 1;
            } else if ($arrText[$i] === ")") {
                $countGood -= 1;
            }
            if ($countGood < 0){
                return false;
            }
        }
        if ($countGood == 0) {
            return true;
        } else {
            return false;
        }
    }
}