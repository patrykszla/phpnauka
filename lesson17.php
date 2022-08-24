<?php
function drukuj(?string $tekst = "", ?bool $nowa_linia = true)
{
    print $tekst;
    if($nowa_linia === true)
    {
        echo "<br />";
    }
}

drukuj("lubię ", false);
drukuj("programować");
drukuj();
drukuj("ale lubie tez wakacje");
