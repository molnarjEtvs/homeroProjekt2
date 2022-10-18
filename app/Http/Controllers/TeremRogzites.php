<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeremRogzites extends Controller
{
    public function getContent(){
        return view("teremRogzites");
    }

    public function rogzites(Request $req){

        $validate = $req->validate(
            [
                "nev" => "required|min:3",
                "szel_cm" => "required|numeric|min:100|max:5000",
                "hossz_cm" => "required|numeric|min:100|max:5000",
                "mag_cm" => "required|numeric|min:100|max:500"
            ],
            [
                "nev.required" => "A mező kitöltése kötelező!",
                "nev.min" => "Minimum 3 karakter adj meg!",
                "szel_cm.required" => "A mező kitöltése kötelező!",
                "szel_cm.numeric" => "Csak szám értéket lehet beírni",
                "szel_cm.min" => "Minimum 100",
                "szel_cm.max" => "Maximim 5000",
                "hossz_cm.required" => "A mező kitöltése kötelező!",
                "hossz_cm.numeric" => "Csak szám értéket lehet beírni",
                "hossz_cm.min" => "Minimum 100",
                "hossz_cm.max" => "Maximim 5000",
                "mag_cm.required" => "A mező kitöltése kötelező!",
                "mag_cm.numeric" => "Csak szám értéket lehet beírni",
                "mag_cm.min" => "Minimum 100",
                "mag_cm.max" => "Maximim 500"
            ]
        );

        

    }
}
