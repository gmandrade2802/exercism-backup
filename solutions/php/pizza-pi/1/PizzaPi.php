<?php

class PizzaPi
{
    function minimumDough() {
        return 200;
    }

    function aditionalDoughForPerson() {
        return 20;
    }

    function minimumSaucePerPizza() {
        return 125;
    }
    public function calculateDoughRequirement($numberOfPizzas, $persons)
    {        
        return $numberOfPizzas * (($persons * $this->aditionalDoughForPerson() ) + $this->minimumDough());
    }

    public function calculateSauceRequirement($numberOfPizzas, $volumeOfSauceCan)
    {
        return (int) round(($numberOfPizzas * $this->minimumSaucePerPizza()) / $volumeOfSauceCan);        
    }

    public function calculateCheeseCubeCoverage($cheeseDimension, $cheeseThickness, $pizzaDiameter)
    {        
        return (int) (($cheeseDimension ** 3) / ($cheeseThickness * pi() * $pizzaDiameter));
    }

    public function calculateLeftOverSlices($numberOfPizzas, $persons)
    {
        return ($numberOfPizzas * 8) % $persons;
    }
}
