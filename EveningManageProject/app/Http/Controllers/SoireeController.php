<?php

namespace App\Http\Controllers;

use App\Models\Soiree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SoireeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function afficherSoirees($id) {
        /*$soirees = Soiree::when($ville, function ($query, $ville) {
            return $query->where('ville_soiree', $ville);
        })
        ->when($payante !== null, function ($query, $payante) {
            return $query->where('payante', $payante);
        })
        ->get();

        return response()->json($soirees);*/
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

    public function refreshSoireesDisponibles(): void
    {
        DB::statement("REFRESH MATERIALIZED VIEW vue_soirees_disponibles");
    }
}
