<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    public function start(String $startingMsg): String
    {
        $msgArray = explode(" ",$startingMsg);
        if($msgArray[0] == "ohce")
        {
            $result = "¡Buenos días ";
            $result .= $msgArray[1];
            $result .= "!";
            return($result);
        }
        if($msgArray[0] == "Stop!"){}


    }
}