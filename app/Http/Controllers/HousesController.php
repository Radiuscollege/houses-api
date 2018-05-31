<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
      $houses = app('db')->select("SELECT * FROM houses");
      $totalPoints = app('db')->select('SELECT sum(points) as points, house_id FROM profiles GROUP BY house_id ORDER BY points');

      foreach($houses as $house) {
        foreach($totalPoints as $points) {
          if ($house->id === $points->house_id) {
            $house->totalPoints = $points->points;
          }
        }
      }

      // sort so the houses are ranked based on points
      usort($houses, function($item1, $item2) {
        return $item2->totalPoints <=> $item1->totalPoints;
      });

      return $houses;

    }

}
