<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controler2 extends Controller

{
    public function index()
    {
       return response()->json([
    'name' => 'Abigail',
    'state' => 'CA',
]);
    }
}