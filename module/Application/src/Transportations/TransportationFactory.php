<?php
namespace Application\Transportations;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Transportations;

/**
 * Description of TransportationFactory
 *
 * @author melsakka
 */
class TransportationFactory {

    const BUS = "Bus";
    const TRAIN = "Train";
    const PLANE = "Plane";

    public static function getTransportation($board) {

        switch ($board['Transportation']) {

            case self::BUS:
                return new Bus($board['Departure'], $board['Arrival']);
                
            case self::TRAIN:
                return new Train($board['Departure'], $board['Arrival'], $board['SeatNumber'], $board['TrainNumber']);
                
            case self::PLANE:
                //$flightNumber, $gateNumber, $seatNumber, $ticketNumber
                return new Plane($board['Departure'], $board['Arrival'], $board['FlightNumber'], 
                        $board['SeatNumber'], $board['GateNumber'], $board['TicketCounter']);
                
            default :
                throw new Exception("Invalid transportaion type");
        }
    }

}
