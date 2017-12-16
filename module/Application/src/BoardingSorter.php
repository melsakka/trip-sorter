<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application;

/**
 * Description of BoardingSorter
 *
 * @author melsakka
 */
class BoardingSorter {

    protected $boardings = array();

    function __construct($boardings) {
        $this->boardings = $boardings;
    }

    public function sort() {


        $sorted = [array_pop($this->boardings)];

        while (count($this->boardings) > 0) {
            
            foreach ($this->boardings as $key => $card) {
                if (end($sorted)['Departure'] === $card['Arrival']) {
                    array_push($sorted, $card);
                } elseif (reset($sorted)['Arrival'] === $card['Departure']) {
                    array_unshift($sorted, $card);
                }

                unset($this->boardings[$key]);
            }
        }

        return $sorted;
    }

}
