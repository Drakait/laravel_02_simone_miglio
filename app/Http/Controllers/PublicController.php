<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage () 
    {
        return view('welcome');
        
    }

    public function aboutUs ()
    {
        return view('chi-siamo');
    }

    public function contacts ()
    {
        return view('contatti');
    }

    public function varie ()
    {   
        $arrayGeneral = [
            ['name' => 'Simone', 'surname' => 'Miglio', 'age' => 30],
            ['name' => 'Mario', 'surname' => 'Rossi', 'age' => 25],
            ['name' => 'Luca', 'surname' => 'Bianchi', 'age' => 28],
            ['name' => 'Giulia', 'surname' => 'Verdi', 'age' => 32],
            ['name' => 'Francesca', 'surname' => 'Neri', 'age' => 27],
        ];

        return view('varie', ['varie' => $arrayGeneral]);
    }

}