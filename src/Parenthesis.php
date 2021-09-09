<?php declare(strict_types=1);

final class Parenthesis
{

    public static function isGoodParenthesis(string $text)
    {
        $arrText = str_split($text);
        $openParenthesis = 0;
        $closeParenthesis = 0;
        for ($i = 0; $i < count($arrText); $i++) {
            if ($arrText[$i] == "(") {
                $openParenthesis += 1;
            } else if ($arrText[$i] == "(") {
                $closeParenthesis += 1;
            }
        }

        if ($openParenthesis == $closeParenthesis) {
            return true;
        } else {
            return false;
        }

    }
}