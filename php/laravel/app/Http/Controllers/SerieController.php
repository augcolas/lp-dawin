<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\ProfileUpdateRequest;
use \App\Models\Serie;

class SerieController extends Controller
{


    public function index(Request $request)
    {
        $series = Serie::all();
        return view('serie.index', ['series' => $series]);
    }

    public function create(Request $request)
    {
        return view('serie.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=> 'required',
            'description' => 'required'
        ]);
        $serie = new Serie();
        $serie->forceFill($data);
        $serie->save();

        return redirect()->route('serie.index');
    }
    
    public function show(Serie $serie)
    {
        return view('serie.show',[
            'serie' => $serie
        ]);
    }

    public function destroy(Request $request){
        
    }
}
