<?php

namespace App\Http\Factories;

use Illuminate\Support\Facades\Route;

class Factory
{
    public static function Maker($maker){

        $car = __NAMESPACE__."\\".$maker."\\CarFactory";

        if (class_exists($car)) {

            $car = new $car;

            $action = explode('@',Route::getCurrentRoute()->getActionName());
            $method = $action[1];

            if(method_exists($car, $method)){
                return new $car;
            }
        }

        $generic_car = __NAMESPACE__."\\Generic\\CarFactory";

        return new $generic_car;
    }
}
