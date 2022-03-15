<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function returnsBuenosDiasAndName()
    {
        $ohce = new Ohce();

        $result = $ohce->start("ohce Mikel");

        $this->assertEquals("¡Buenos días Mikel!", $result);
    }

}
