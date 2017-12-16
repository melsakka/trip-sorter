<?php
use Application\Transportations\Plane;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PlaneTest
 *
 * @author melsakka
 */
class PlaneTest extends PHPUnit\Framework\TestCase{

    public function testGetTripDescription() {

        $plane = new Plane("Gerona", "Stockholm", "SK455", "45B", "3A", "344");

        $expectedMessage = "From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. "
                . "Baggage drop at ticket counter 344.";
        
        
        $actualMessage = $plane->getTripDescription();

        $this->assertEquals($expectedMessage, $actualMessage);
    }

}
