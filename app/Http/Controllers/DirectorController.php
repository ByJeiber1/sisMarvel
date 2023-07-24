<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DirectorFormRequest;
use DB;


class DirectorController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $directores=DB::table('director')->where('directorNombre','LIKE','%'.$query.'%')
            ->orderBy('directorCI','desc')
            ->paginate(7);
            return view('crud.director.index',["directores"=>$directores,"searchText"=>$query]);
        }
    }

    public function create()
    {
        return view("crud.director.create");
    }

    public function store(DirectorFormRequest $request)
    {
        $director=new Director;
        $director->directorNombre=$request->get('directorNombre');
        $director->save();
        return redirect()->route('director.index');
    }

    public function show($directorCI)
    {
        return view("crud.director.show",["director"=>Director::findOrFail($directorCI)]);
    }

    public function edit($directorCI)
    {
        return view("crud.director.edit",["director"=>Director::findOrFail($directorCI)]);
    }

    public function update(DirectorFormRequest $request, $directorCI)
    {
        $director=Director::findOrFail($directorCI);
        $director->directorNombre=$request->get('directorNombre');
        $director->update();
        return redirect()->route('director.index');
    }

    public function destroy($directorCI)
    {
        $director=Director::find($directorCI);
        $director->delete();
        return redirect()->route('director.index');
    }
}
