<?php
class Ssak
{
    private $kolorOczu;

    public function setKolorOczu(string $kolor)
    {
        $this->kolorOczu = $kolor;
    }

    public function getKolorOczu(): string
    {
        return $this->kolorOczu;
    }
}

class Pies extends Ssak
{
    private $rasa;

    public function setRasa(string $rasa)
    {
        $this->rasa = $rasa;
    }

    public function getRasa(): string
    {
        return $this->rasa;
    }
}

$pies = new Pies();
$pies->setKolorOczu(kolor: "brązowe");
$pies->setRasa(rasa: "owczarek");

print "Moj pies:";
echo "<br/>";
print "Rasa: " . $pies->getRasa();
echo "<br/>";
print "kolor oczu: " . $pies->getKolorOczu();

class Silnik
{
    private $moc;
    private $moment;
    private $paliwo;

    public function setMoc(int|float $moc)
    {
        $this->moc = $moc;
    }

    public function getMoc(): int|float
    {
        return $this->moc;
    }
}

class Auto
{
    private $silnik;

    public function __construct(
        private string $marka,
        private string $model,
        int|float $moc
    ) {
        $this->silnik = new Silnik;
        $this->silnik->setMoc($moc);
    }

    public function print()
    {
        echo "<br />";
        print "Parametry samochodu. \n";
        echo "<br />";
        print "Marka: " . $this->marka;
        echo "<br />";
        print "Model: " . $this->model;
        echo "<br />";
        print "Moc silnika: " . $this->silnik->getMoc() . "KM";
    }
}

$auto = new Auto(marka: "Syrena", model: "S-31", moc: 45);
$auto->print();
