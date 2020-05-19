<?php

class CoffeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }

}

class SpecialtyCoffeeMaker extends CoffeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }

}


(new SpecialtyCoffeeMaker())->brew();
