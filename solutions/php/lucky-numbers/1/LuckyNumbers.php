<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $lengthArrayNumber1 = count($digitsOfNumber1);
        $lengthArrayNumber2 = count($digitsOfNumber2);
        $NumberStringOfArray1 = "";
        $NumberStringOfArray2 = "";
        for ($i = 0; $i < $lengthArrayNumber1; $i++) {
            $NumberStringOfArray1 = $NumberStringOfArray1 .  $digitsOfNumber1[$i];
        }
        for ($j = 0; $j < $lengthArrayNumber2; $j++) {
            $NumberStringOfArray2 = $NumberStringOfArray2 . $digitsOfNumber2[$j];
        }
        return (int)$NumberStringOfArray1 + (int)$NumberStringOfArray2;
    }

    public function isPalindrome(int $number): bool
    {
        $numberString = (string)$number;
        $lengthString = strlen($numberString);
        $count = 0;
        for ($i = $lengthString - 1; $i >= 0; $i--) {
            if ($numberString[$i] != $numberString[$count]) {
                return false;
                break;
            } else {
                $count++;
            }
        }
        return true;
    }

    public function validate(string $input): string
    {


        if ($input === '') {
            return 'Required field';
        }
        try {
            $input = intval($input);
            if ($input <= 0) {
                return 'Must be a whole number larger than 0';
            }
            return '';
        } catch (\Throwable $th) {
            return 'Must be a whole number larger than 0';
        }
    }
}
