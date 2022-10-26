<?php


class Audio
{
    protected function print1()
    {
        print "Klasa Auto";
        echo "<br />";
    }
}

class Stereo extends Audio
{
    protected function print2()
    {
        print "Klasa stereo";
        echo "<br />";
    }
}

class Radio extends Stereo
{
    public function print3()
    {
        $this->print1();
        $this->print2();
        print "klasa Radio";
    }
}

$radio = new Radio();
$radio->print3();


interface Data
{
    public function getID();
    public function getName();
    public function getCode();
}

class Patient implements Data
{
    public function getID()
    {
        echo "<br />";
        print "obsluga metody getID();";
        echo "<br />";
    }

    public function getName()
    {
        print "obluga metody getName()";
        echo "<br />";
    }

    public function getCode()
    {
        print "oblsuga metody getCode()";
        echo "<br />";
    }
}

$chory = new Patient;
$chory->getID();
$chory->getName();
$chory->getCode();

abstract class Info 
{
    abstract public function getID();

    public function getName()
    {
        echo "<br />";
        print "Obsługa metody getName() klasy abstrakcyjnej info";
    }

    final public function getCode()
    {
        echo "<br />";
        print "Obsluga metody getCode()";
    }
}

class Pacjent extends Info
{
    public function getID()
    {
        print "obsluga metody getId()";
    }

    
}

$nfz = new Pacjent();
$nfz->getID();
$nfz->getName();
$nfz->getCode();

