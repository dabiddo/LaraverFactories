<?php
namespace App\Http\Factories\Generic;


use Illuminate\Http\Request;

class CarFactory
{
    public function index(Request $request)
    {
        return 'GENERIC';
    }
}
