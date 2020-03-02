<?php

namespace App\Http\Controllers;

use App\City;
//use Illuminate\Http\File;
use App\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ManagerPeopleController extends Controller
{
    protected $people;
    
    public function __construct(People $people)
    {
        $this->people = $people;
        $this->middleware('auth');
    }
    
    public function index()
    {
        $peoples = $this->people->paginate(5);
        return view('peoples.index', compact('peoples'));
    }
    
    public function create()
    {
        return view('peoples.create');
    }
    
    
    public function store(Request $request)
    {
        $this->people->name = $request->name;
        $this->people->phone = $request->phone;
        $this->people->email = $request->email;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $this->people->image = $path;
        }
        $this->people->save();
        return redirect()->route('managers.index');
    }
    
    
    public function destroy($id)
    {
        $people = $this->people->findOrFail($id);
        File::delete(storage_path('app\public\\' . $people->image));
        $people->delete();
        return redirect()->route('managers.index');
    }
    
    public function edit($id)
    {
        $peoples = $this->people->findOrFail($id);
        return view('peoples.formEdit', compact('peoples','citys'));
    }
    
    public function update(Request $request, $id)
    {
        $people = $this->people->find($id);
        $people->name = $request->name;
        $people->phone = $request->phone;
        $people->email = $request->email;
        if ($request->hasFile('image')) {
            File::delete(storage_path('app\public\\' . $people->image));
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $people->image = $path;
        }
        $people->save();
        return redirect()->route('managers.index');
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $dataSearch = DB::table("peoples")->where("name", "like", "%$search%")
            ->orwhere("email", "like", "%$search%")
            ->paginate(3);
        return view('peoples.search', compact('dataSearch'));
    }
}
