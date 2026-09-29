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
            ['articolo' => 'La cosa', 'tipologia' => 'dei fantastici 4', 'dettaglio' => 'il forzuto'],
            ['articolo' => 'il coso', 'tipologia' => 'un oggetto', 'dettaglio' => 'qualcosa di utile'],
            ['articolo' => 'l\'inutile', 'tipologia' => 'Politica italiana', 'dettaglio' => 'inutile da decenni'],
            ['articolo' => 'quello', 'tipologia' => 'aggettivo dimostrativo', 'dettaglio' => 'indica qualcosa lontano sia da chi parla che da chi ascolta'],
            ['articolo' => 'questo', 'tipologia' => 'aggettivo dimostrativo', 'dettaglio' => 'indica qualcosa vicino a chi parla'],
            ['articolo' => 'codesto', 'tipologia' => 'aggettivo dimostrativo', 'dettaglio' => 'indica qualcosa vicino a chi ascolta'],
        ];

        return view('varie', ['varie' => $arrayGeneral]);
    }

}