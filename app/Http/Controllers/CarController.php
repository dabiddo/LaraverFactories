<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Factories\Factory;

class CarController extends Controller
{
    protected $car;

    public function __construct(Request $request)
    {
        $maker = ucwords($request->input('maker'));
        $this->car = Factory::Maker($maker);
        return $this->car;
    }

    public function index(Request $request)
    {
        return $this->car->index($request);
    }

}
