<?php
class Ssak
{
    private $kolorOczu;
    
    public function setKolorOczu(string $kolor)
    {
        $this->kolorOczu =$kolor;
    }

    public function getKolorOczu() : string 
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

    public function getRasa() : string 
    {
        return $this->rasa;
    }
}

$pies = new Pies();
$pies->setKolorOczu(kolor: "brązowe");
$pies->setRasa(rasa: "owczarek");

print "Moj pies:";
echo"<br/>";
print "Rasa: ". $pies->getRasa();
echo"<br/>";
print "kolor oczu: ". $pies->getKolorOczu();