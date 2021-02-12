<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        $membre = Membre::all();
        return view ('welcome',compact('membre'));
    }
    public function create(){
        return view ('pages.create');
    }
    public function store(Request $request){
        $newEntry = new Membre;
        $newEntry->nom = $request->nom;
        $newEntry->age = $request->age;
        $newEntry->genre = $request->genre;
        $newEntry->save();
        return redirect()-> back();
    }
    public function show($id){
        $show = Membre::find($id);
        return view ('pages.show',compact('show'));
    }
    public function destroy($id){
        $destroy = Membre::find($id);
        $destroy->delete();
        return view('welcome');
    }
    public function edit($id){
        $edit = Membre::find($id);
        return view('pages.edit', compact('edit'));
    }
    public function update(Request $request, $id){
        $update = Membre::find($id);
        $update->nom = $request->nom;
        $update->age = $request->age;
        $update->genre = $request->genre;
        $update-> save();
        return redirect('/show-membre/.$update->id');
    }
    public function destroyall (){
        $destroy = Membre::all();
        $destroy-> delete();
        return view('welcome');
    }
}
