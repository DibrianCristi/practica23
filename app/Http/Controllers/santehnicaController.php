<?php

namespace App\Http\Controllers;

use App\Models\santehnica;
use Illuminate\Http\Request;

class santehnicaController extends Controller
{
    public function showEdit(santehnica $santehnica)
    {
        return view('edit-santehnica', ['santehnica' => $santehnica]);
    }

    public function deleteProdus(santehnica $santehnica)
    {
        $santehnica->delete();
        return redirect('/santehnica');
    }

    public function produsEdit(santehnica $santehnica, Request $request)
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

        $santehnica->update($incomingFields);
        return redirect('/santehnica');
    }

    public function createSantehnica(Request $request)
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
        santehnica::create($incomingFields);
        return redirect('/santehnica');
    }

    public function showcreate()
    {
        return view('new_santehnica_produs');
    }
}
