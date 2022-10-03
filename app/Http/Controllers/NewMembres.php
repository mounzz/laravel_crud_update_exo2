<?php

namespace App\Http\Controllers;

use App\Models\membres;
use Illuminate\Http\Request;

class NewMembres extends Controller
{
    public function NewMembre(){
        $membres = membres::all();
        return view('pages.membres', compact('membres'));
    }

    public function update(Request $request, $id){
        $membres = membres::find($id);
        $membres -> nom = $request -> nom;
        $membres -> age = $request -> age;
        $membres -> genre = $request -> genre;
        $membres -> save();
        return redirect()->back();
    }
}
