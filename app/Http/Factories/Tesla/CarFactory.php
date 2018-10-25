<?php
namespace App\Http\Factories\Tesla;


use Illuminate\Http\Request;

class CarFactory
{
    public function index(Request $request)
    {
        return 'ELECTRIC';
    }
}
