<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application;
use Application\Transportations\TransportationFactory;
use Application\BoardingSorter;
/**
 * Description of Trip
 *
 * @author melsakka
 */
class Trip {
    
    const FINAL_DESTINATION_MESSAGE = "You have arrived at your final destination.";
    
    public function sort($unsortedBoardings) {
        $sorter = new BoardingSorter($unsortedBoardings);
        return $sorter->sort();
    }

    public function getFullTripDescription($sortedBoardings) {

        $tripDescription="";
        for($i=count($sortedBoardings)-1; $i>=0; $i--) {
            $transportation= TransportationFactory::getTransportation($sortedBoardings[$i]);
            $tripDescription.="<br><br>".$transportation->getTripDescription();
        }
        $tripDescription.= "<br><br>".self::FINAL_DESTINATION_MESSAGE;
        
        return $tripDescription;
    }

}
