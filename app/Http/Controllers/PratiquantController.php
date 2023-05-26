<?php

namespace App\Http\Controllers;

use App\Models\Pratiquant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PratiquantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pratiquants = Pratiquant::all();
        return view('dashboard.pratiquants.index', compact('pratiquants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pratiquants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validated = $request->validate([
            'nom'                    => ['required', 'string', 'max:255'],
            'prenoms'                => ['required', 'string', 'max:255'],
            'dat_nais'                  => ['required', 'string', 'max:255'],
            'lieu' => [ 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:255'],
            'profession'                  => ['string', 'max:255'],
            'num_passeport'                   => ['required', 'integer', 'unique:pratiquants,num_passeport'],
            'grade'                  => ['required', 'string', 'max:255'],
            'contact_urgence'                => ['string', 'max:255'],
            'photo'                => ['max:255'],

        ]);



        $pratiquants = Pratiquant::create([

            'nom' => ucwords(strtolower($request->nom)),
            'prenoms' => ucwords(strtolower($request->prenoms)),
            'dat_nais' => ucwords(strtolower($request->dat_nais)),
            'lieu' => ucwords(strtolower($request->lieu)),
            'contact' => ucwords(strtolower($request->contact)),
            'profession' => ucwords(strtolower($request->profession)),
            'num_passeport' => ucwords(strtolower($request->num_passeport)),
            'grade' => ucwords(strtolower($request->grade)),
            'contact_urgence' => ucwords(strtolower($request->contact_urgence)),
            'photo' => ucwords(strtolower($request->photo)),

        ]);

        return redirect()->route('pratiquants.create')->with('success', 'Pratiquant créé avec succès.');

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
        return view('dashboard.pratiquants.edit');
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
