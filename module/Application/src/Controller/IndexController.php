<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Trip;

class IndexController extends AbstractActionController {

    public function indexAction() {
        $unsortedBoardings = array(
            array(
                'Departure' => 'Stockholm',
                'Arrival' => 'New York JFK',
                'Transportation' => 'Plane',
                'FlightNumber' => 'SK22',
                'SeatNumber' => '7B',
                'GateNumber' => '22',
                'TicketCounter' => '10A',
            ),
            array(
                'Departure' => 'Barcelona',
                'Arrival' => 'Gerona',
                'Transportation' => 'Bus',
            ),
            array(
                'Departure' => 'Madrid ',
                'Arrival' => 'Barcelona',
                'Transportation' => 'Train',
                'SeatNumber' => '45B',
                'TrainNumber' => '78A',
            ),
            array(
                'Departure' => 'Gerona',
                'Arrival' => 'Stockholm',
                'Transportation' => 'Plane',
                'FlightNumber' => 'SK455',
                'SeatNumber' => '3A',
                'GateNumber' => '45B',
                'TicketCounter' => '344',
            )
        );
        
        $trip= new Trip();
        $sortedBoardings=$trip->sort($unsortedBoardings);
        $tripDescription=$trip->getFullTripDescription($sortedBoardings);
        
        return new ViewModel(array(
           'tripDescription' => $tripDescription,
         ));
    }

}
