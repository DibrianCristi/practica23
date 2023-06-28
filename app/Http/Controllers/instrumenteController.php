<?php

namespace App\Http\Controllers;

use App\Models\instrumente;
use Illuminate\Http\Request;

class instrumenteController extends Controller
{

    public function showEdit(instrumente $instrumente)
    {
        return view('edit-instrumente', ['instrumente' => $instrumente]);
    }

    public function deleteProdus(instrumente $instrumente)
    {
        $instrumente->delete();
        return redirect('/instrumente');
    }

    public function produsEdit(instrumente $instrumente, Request $request)
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

        $instrumente->update($incomingFields);
        return redirect('/instrumente');
    }

    public function createInstrumente(Request $request)
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
        instrumente::create($incomingFields);
        return redirect('/instrumente');
    }
    public function showcreate()
    {
        return view('create_instrumente_produs');
    }
}
