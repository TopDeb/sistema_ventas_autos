<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    protected $brand;
    public function __construct(){
        $this->brand = new Brand();
        
    }

    public function index()
    {
        // $response['brands'] = $this->brand->all();
        return view('brand.index');
    }
    
    public function store(Request $request)
    {
      
        $this->brand->create($request->all());
        return redirect()->back();
    }
}
