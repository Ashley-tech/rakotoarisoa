<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class SoireeService
{
    /**
     * Rafraîchit la vue matérialisée des soirées disponibles.
     */
    public function refreshSoireesDisponibles()
    {
        DB::statement("REFRESH MATERIALIZED VIEW soirees_disponibles");
    }
}

?>
