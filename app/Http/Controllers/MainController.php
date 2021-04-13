<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $notes = Note::all();


        return view('home', [ 'notes' => $notes ]);
    }

    public function note($id)
    {
        // If doesn't note exists at that id.
        if (!Note::where('id', $id)->exists())
            abort(404);

        $note = Note::where('id', $id)->first();

        return view('note', [ 'note' => $note ]);
    }
}