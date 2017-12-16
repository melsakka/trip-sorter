<?php
use Application\Transportations\Bus;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BusTest
 *
 * @author melsakka
 */
class BusTest extends PHPUnit\Framework\TestCase{

    public function testGetTripDescription() {

        $bus = new Bus("Cairo", "Alexandria");

        $expectedMessage = "Take the airport bus from Cairo to Alexandria Airport. No seat assignment.";
        $actualMessage = $bus->getTripDescription();
        
        $this->assertEquals($expectedMessage, $actualMessage);
    }

}
