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
