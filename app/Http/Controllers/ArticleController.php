<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private function articoli()
    {
        return [
            [
                'titolo' => 'Cos\'è Laravel e perché usarlo',
                'categoria' => 'Backend',
                'autore' => 'Simone Miglio',
                'data' => '12/01/2026',
                'sommario' => 'Un framework PHP che rende lo sviluppo web ordinato e veloce.',
                'testo' => 'Laravel è un framework PHP basato sul pattern MVC. Offre routing semplice, un motore di template (Blade) e tanti strumenti pronti all\'uso, così ti concentri sulla logica dell\'applicazione invece che sulla configurazione.',
            ],
            [
                'titolo' => 'Rotte e controller: separare la logica',
                'categoria' => 'Backend',
                'autore' => 'Simone Miglio',
                'data' => '19/01/2026',
                'sommario' => 'Le rotte indirizzano, i controller gestiscono la logica.',
                'testo' => 'Le rotte decidono quale URL porta a quale metodo. Il controller prepara i dati e sceglie la vista da mostrare. Tenere separati i due livelli rende il codice più leggibile e più facile da modificare.',
            ],
            [
                'titolo' => 'Blade: le viste in Laravel',
                'categoria' => 'Frontend',
                'autore' => 'Simone Miglio',
                'data' => '26/01/2026',
                'sommario' => 'Cicli, condizioni e variabili nelle pagine con Blade.',
                'testo' => 'Blade permette di scrivere HTML con direttive come @foreach e @if e di stampare variabili con le doppie graffe. Le viste ricevono i dati dal controller e li mostrano senza codice PHP complicato.',
            ],
            [
                'titolo' => 'Bootstrap: una griglia responsive in 5 minuti',
                'categoria' => 'Frontend',
                'autore' => 'Simone Miglio',
                'data' => '02/02/2026',
                'sommario' => 'Righe, colonne e breakpoint per ogni schermo.',
                'testo' => 'La griglia di Bootstrap divide la pagina in 12 colonne. Con classi come col-12 e col-md-6 decidi quante colonne occupa un elemento su mobile e su desktop, senza scrivere media query a mano.',
            ],
        ];
    }

    public function servizi()
    {
        return view('servizi', ['articoli' => $this->articoli()]);
    }

    public function dettaglio($id)
    {
        $articoli = $this->articoli();

        return view('dettaglio', ['articolo' => $articoli[$id], 'id' => $id]);
    }
}