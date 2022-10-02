<?php
class Auto
{
    private $marka;
    public function setMarka(string $marka)
    {
        $this->marka = $marka;
    }

    public function getMarka(): string
    {
        return $this->marka;
    }
}

$fiat = new Auto();
$fiat->setMarka("fiat 125p");

$jeep = new Auto();
$jeep->setMarka("jeep grand cheroke");

print $fiat->getMarka();
echo "<br />";
print $jeep->getMarka();


class Kwadrat 
{
    private $pole;
    private $obwod;
    
    public function __construct(int|float $bok)
    {
        $this->pole = $bok * $bok;
        $this->obwod = 4*$bok;
    }

    public function pole() : int|float
    {
        return $this->pole;
    }

    public function obwod(): int|float
    {
        return $this->obwod;
    } 
}

$bok = 12.5;
$kwadrat = new Kwadrat($bok);

$pole = $kwadrat->pole();
$obwod = $kwadrat->obwod();

printf("pole kwadratu o boku %.3f wynosi %.2f.", $bok, $pole);
echo "<br />";
printf("obwod kwadratu o boku %.3f wynosi %.2f.", $bok, $obwod);