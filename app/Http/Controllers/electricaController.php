<?php

namespace App\Http\Controllers;

use App\Models\electrica;
use Illuminate\Http\Request;

class electricaController extends Controller
{

    public function showEdit(electrica $electrica)
    {
        return view('edit-electrica', ['electrica' => $electrica]);
    }

    public function deleteProdus(electrica $electrica)
    {
        $electrica->delete();
        return redirect('/electrica');
    }

    public function produsEdit(electrica $electrica, Request $request)
    {
        $incomingFields = $request->validate([
            'denumire' => 'required',
            'descriere' => 'required',
            'made_in' => 'required',
            'cantitate' => 'required',
            'pret' => 'required',

        ]);

        $incomingFields['denumire'] = strip_tags($incomingFields['denumire']);
        $incomingFields['descriere'] = strip_tags($incomingFields['descriere']);
        $incomingFields['made_in'] = strip_tags($incomingFields['made_in']);
        $incomingFields['cantitate'] = strip_tags($incomingFields['cantitate']);
        $incomingFields['pret'] = strip_tags($incomingFields['pret']);

        $electrica->update($incomingFields);
        return redirect('/electrica');
    }
    public function createElectrica(Request $request)
    {
        $incomingFields = $request->validate([
            'denumire' => 'required',
            'descriere' => 'required',
            'made_in' => 'required',
            'cantitate' => 'required',
            'pret' => 'required'
        ]);

        $incomingFields['denumire'] = strip_tags($incomingFields['denumire']);
        $incomingFields['descriere'] = strip_tags($incomingFields['descriere']);
        $incomingFields['made_in'] = strip_tags($incomingFields['made_in']);
        $incomingFields['cantitate'] = strip_tags($incomingFields['cantitate']);
        $incomingFields['pret'] = strip_tags($incomingFields['pret']);
        electrica::create($incomingFields);
        return redirect('/electrica');
    }

    public function showcreate()
    {
        return view('create_electrica_produs');
    }
}
