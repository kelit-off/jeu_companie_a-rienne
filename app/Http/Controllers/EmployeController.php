<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class EmployeController extends Controller
{   
    public function viewListEmploye() {
        return view('employe.listEmploye',[
            "ListeEmployeTotal" => array(
                array(
                    // PNT
                    "nom_poste" => "PNT",
                    "salaire_actuel" => 5000,
                    "total_employe" => 10,
                ),
                array(
                    // PNC
                    "nom_poste" => "PNC",
                    "salaire_actuel" => 3000,
                    "total_employe" => 100,
                ),
                array(
                    // Mecanicien
                    "nom_poste" => "Mecanicien",
                    "salaire_actuel" => 2000,
                    "total_employe" => 50,
                )
            )
        ]);
    }

    public function viewGestionEmploye() {
        return view('employe.gestionEmploye');
    }

    public function postGestionEmploye(Request $request) {
        
    }

    public function viewLicencieEmploye() {

    }
}
