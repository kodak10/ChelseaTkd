<?php

namespace App\Http\Controllers;

use App\Models\Pratiquant;
use Illuminate\Http\Request;

class PratiquantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pratiquants = Pratiquant::all();
        return view ('dashboard.pratiquants.index', compact('pratiquants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.pratiquants.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'num_passeport' => 'required|unique:pratiquant|max:10',
            'grade' => '',
            'nom' => 'required',
            'prenoms' => 'required',
            'date_nais' => '',
            'lieu_nais' => '',
            'profession' => '',
            'contact_pratiquant' => '',
            'nom_parent' => '',
            'contact_parent1' => '',
            'contact_parent2' => '',
            'groupe_sanguin' => '',
            'photo' => '',
        ]);

        // if (Pratiquant::where('num_passeport', $request->num_passeport)->first()) {
        //     $validated->errors()->add('Numero de passeport', "Ce Numero de passeport est déjà utilisé.");
        //     return redirect()->back()->with([
        //         "success" => false,
        //         "message" => "La valeur du champ est déjà utilisée"
        //     ]);
        // }

        $pratiquant = Pratiquant::create([
            'num_passeport' => ucwords(strtolower($request->num_passeport)),
            'grade' => ucwords(strtolower($request->grade)),
            'nom' => strtolower($request->nom),
            'prenoms' => strtolower($request->prenoms),
            'date_nais' => strtolower($request->date_nais),
            'lieu_nais' => strtolower($request->lieu_nais),
            'profession' => strtolower($request->profession),
            'contact_pratiquant' => ucwords(strtolower($request->contact_pratiquant)),
            'nom_parent' => strtolower($request->nom_parent),
            'contact_parent1' => ucwords(strtolower($request->contact_parent1)),
            'contact_parent2' => ucwords(strtolower($request->contact_parent2)),
            'groupe_sanguin' => ucwords(strtolower($request->groupe_sanguin)),
            'photo' => strtolower($request->photo),


        ]);

        return redirect()->route('pratiquant.create')->with([
            'success' => true,
            "message" => "Inscription effectué avec succès.",
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
