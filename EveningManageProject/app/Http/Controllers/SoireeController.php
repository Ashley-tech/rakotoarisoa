<?php

namespace App\Http\Controllers;

use App\Models\Soiree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Services\SoireeService;

class SoireeController extends Controller
{
    protected $soireeService;

    public function __construct(SoireeService $soireeService)
    {
        $this->soireeService = $soireeService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $compte = $request->user(); // Supposons que l'utilisateur est connecté
        $soireesDisponibles = Soiree::with(['adresse', 'participants'])
            ->withCount('participants')
            ->whereHas('adresse', function ($query) use ($compte) {
                $query->where('ville', $compte->adresse->ville);
            })
            ->having('participants_count', '<', DB::raw('nbre_places_max'))
            ->orderBy('date_publication')
            ->get(['id_soiree', 'titre_soiree', 'date_soiree', 'heure', 'id_adresse', 'nbre_places_max']);

        return view('soirees.index', compact('soireesDisponibles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function afficherSoirees($id) {
        $soirees = Soiree::all();
        $soirees->load('participants');

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

    public function refreshSoireesDisponibles()
    {
        $this->soireeService->refreshSoireesDisponibles();
        return response()->json(['message' => 'Vue soirees_disponibles rafraîchie avec succès.']);
    }
}
