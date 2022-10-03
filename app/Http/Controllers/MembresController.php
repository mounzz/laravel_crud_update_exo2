<?php

namespace App\Http\Controllers;

use App\Models\membres;
use Illuminate\Http\Request;

class MembresController extends Controller
{
    public function AddMembres(){
        $membres = membres::all();
        return view('AddMembres', compact('membres'));
    }

    public function store(Request $request){
        $eleves = new membres;
        $eleves -> nom = $request -> nom;
        $eleves -> age = $request -> age;
        $eleves -> genre = $request -> genre;
        $eleves -> save();
        return redirect('/');
    }

    public function destroy($id){
        $destroy = membres::find($id);
        $destroy -> delete();
        return redirect()->back();
    }

    public function deleteAll(){
        DB::table('membres')->delete();
        return redirect()->back();
    }

    public function show($id){
        $id_show = membres::find($id);
        return view('pages.membresEdit', compact('id_show'));

    }

}
