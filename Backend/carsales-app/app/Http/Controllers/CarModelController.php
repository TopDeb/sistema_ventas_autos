<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;

class CarModelController extends Controller
{
    protected $carmodel;
    public function __construct(){
        $this->carmodel = new CarModel();
        
    }

    public function index()
    {
        // $response['brands'] = $this->brand->all();
        return view('carmodel.index');
    }
}
