<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// GOAL: come detto a lezione, generare nuovo controller con rotta associata;
// definire poi classe Movie con titolo e descrizione;
// definire costruttore con titolo necessario e descrizione opzionale;
// e metodo getString() che restituisca una stringa riportante tutte le variabili;
// generare poi un paio di istanze e stamparle per mezzo del dd() come visto in classe


class movies {

  public $title;
  public $desc;

  public function __construct ($titolo,$descrizione = null) {

    $this -> title = $titolo;
    if ($descrizione == null) {
      $this -> desc = "Descrizione non disponibile.";
    }else {
      $this -> desc = $descrizione;
    }
  }

  public function getString() {

    return "Titolo: " .$this -> title ."\n" ."Descrizione: " .$this -> desc;
  }
}

class myController extends Controller
{
  public function home () {

    $ist1 = new movies('Joker','Arthur Fleck è un individuo profondamente alienato che, nella Gotham City del 1981 sempre più preda del degrado e della disuguaglianza sociale, vive con l anziana madre Penny in un appartamento dei bassifondi.');
    $ist1Str = $ist1 -> getString();

    $ist2 = new movies('Benvenuti al Sud');
    $ist2Str = $ist2 -> getString();

    $ist3 = new movies('Titanic');
    $ist3Str = $ist3 -> getString();

    $ist4 = new movies('Piovono Polpette','Per salvare la cittadina di Swallow Marina da un momento molto difficile, un inventore costruisce un macchinario in grado di trasformare l acqua in cibo.');
    $ist4Str = $ist4 -> getString();

    $ist5 = new movies('Io, me e Irene');
    $ist5Str = $ist5 -> getString();

    dd($ist1Str,$ist2Str,$ist3Str,$ist4Str,$ist5Str);
    return view('pages.homepage');
  }
}
