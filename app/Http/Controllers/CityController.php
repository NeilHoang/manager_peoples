<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    protected $city;
    
    public function __construct(City $city)
    {
        $this->middleware('auth');
        $this->city = $city;
    }
    
    public function index()
    {
        $cities = $this->city->all();
        return view('region.index', compact('cities'));
    }
    
    public function create()
    {
        return view('region.create_city');
    }
    
    public function store(Request $request)
    {
        $city = new City();
        $city->name = $request->name;
        $city->save();
        return redirect()->route('region.index');
    }
}
