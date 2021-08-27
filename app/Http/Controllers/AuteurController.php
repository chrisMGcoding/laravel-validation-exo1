<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auteur;

class AuteurController extends Controller
{
    public function index() {
        $auteur = Auteur::all();
        return view('pages.auteur', compact('auteur'));
    }

    public function store(Request $request) {
        request()->validate([
            "name"=>["required", "min:1", "max:20"],
            "texte"=>["required", "min:1", "max:300"],
            "note"=>["required", "min:1", "max:5"]
        ]);

        $auteur = new Auteur;

        $auteur->name = $request->name;
        $auteur->texte = $request->texte;
        $auteur->note = $request->note;
        $auteur->save();

        return redirect('/');
    }

    public function destroy($id) {
        $auteur = Auteur::find($id);
        $auteur->delete();

        return redirect()->back();
    }

    public function show($id) {
        $auteur = Auteur::find($id);
        
        return view('crud.showauteur', compact('auteur'));
    }

    public function edit($id) {
        $auteur = Auteur::find($id);

        return view('crud.updateauteur', compact('auteur'));
    }

    public function update($id, Request $request) {
        request()->validate([
            "name"=>["required", "min:1", "max:20"],
            "texte"=>["required", "min:1", "max:300"],
            "note"=>["required", "min:1", "max:5"]
        ]);

        $auteur = Auteur::find($id);

        $auteur->name = $request->name;
        $auteur->texte = $request->texte;
        $auteur->note = $request->note;

        $auteur->save();

        return view('/');
    }
}
