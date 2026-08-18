<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $montaNumero = null;
        $numero1 = 0;
        $numero2 = 0;
        foreach($digitsOfNumber1 as $n1) {
            $montaNumero = $montaNumero . $n1;    
        }
        $numero1 = (int) $montaNumero;
        $montaNumero = null;
        foreach($digitsOfNumber2 as $n2) {
            $montaNumero = $montaNumero . $n2;    
        }
        $numero2 = (int) $montaNumero;
        
        return $numero1+$numero2;
        
    }

    public function isPalindrome(int $number): bool
    {
        $numero = (string) $number;
        $numeroReverso = strrev($numero);
        return $numero == $numeroReverso;
        
    }

    public function validate(string $input): string
    {
        //throw new \BadFunctionCallException("Implement the function");
        if (trim($input) === "") {
            return "Required field";
        } elseif (((int) $input) <= 0) {
            return "Must be a whole number larger than 0";
        } else {
            return "";
        }
    }
}
