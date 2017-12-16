<?php
use Application\Transportations\Train;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainTest
 *
 * @author melsakka
 */
class TrainTest extends PHPUnit\Framework\TestCase {

    public function testGetTripDescription() {

        $train = new Train("Madrid", "Barcelona", "78A", "45B");

        $expectedMessage = "Take train 78A from Madrid to Barcelona. Sit in seat 45B.";
        $actualMessage = $train->getTripDescription();

        $this->assertEquals($expectedMessage, $actualMessage);
    }

}
