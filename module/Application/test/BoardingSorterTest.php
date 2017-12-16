<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ApplicationTest;

use Application\BoardingSorter;

/**
 * Description of BoardingSorterTest
 *
 * @author melsakka
 */
class BoardingSorterTest extends \PHPUnit\Framework\TestCase {

    public function testSort() {

        $boardingCollection = $this->getUnsortedArray();
        $boardingsSorter = new BoardingSorter($boardingCollection);
        $sortedArray = $boardingsSorter->sort();

       // print_r(count($boardingCollection)); print_r(count($sortedArray));die();
        $this->assertEquals($sortedArray, $this->getSortedArray());
    }

    private function getUnsortedArray() {
        return $boardingCollection = array(
//            array(
//                'Departure' => 'D',
//                'Arrival' => 'N',
//            ),
            array(
                'Departure' => 'B',
                'Arrival' => 'G',
            ),
            array('Departure' => 'S',
                'Arrival' => 'D'
            ),
            array(
                'Departure' => 'M',
                'Arrival' => 'B',
            ),
            array('Departure' => 'G',
                'Arrival' => 'S',
            )
        );
    }

    private function getSortedArray() {
        return $boardingCollection = array(
            array(
                'Arrival' => 'D',
                'Departure' => 'S',
            ), array(
                'Arrival' => 'S',
                'Departure' => 'G',
            ), array(
                'Arrival' => 'G',
                'Departure' => 'B',
            ), array(
                'Arrival' => 'B',
                'Departure' => 'M',
            )
        );
    }

}
