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
echo "<br />";
class Produkt
{
    private $netto;
    public $vat = 23;

    public function __construct(private string $nazwa, private int|float $brutto)
    {
        $this->netto = $this->setNetto();
    }

    public function drukuj() 
    {
        printf(
            "Produkt:%s".PHP_EOL."Cena netto: %.2f PLN.". PHP_EOL .
            
            "Podatek: %.2f%%".PHP_EOL."Cena brutto: %.2f PLN",
            $this->nazwa,
            $this->netto,
            $this->vat,
            $this->brutto
        );
    }

    private function setNetto() : int|float 
    {
        return $this->brutto - ($this->brutto / (1 + $this->vat));
    }
}

$owoc = new Produkt("Jablko", brutto: 4.85);
print $owoc->drukuj();


class Zwierzak
{
    public function __construct(private string $gatunek,  private string $imie, private int|float $wiek)
    {
        return true;
    }

    public function drukuj()
    {
        echo"<br/>";
        print ($this->gatunek);
        echo"<br/>";
        print($this->imie);
        echo"<br/>";
        print($this->wiek);

    }
}

$zwierze = new Zwierzak("ssak", imie: 'krzys', wiek: 2);

$zwierze->drukuj();