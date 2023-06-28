<?php

namespace App\Http\Controllers;

use App\Models\suruburi;
use Illuminate\Http\Request;

class suruburiController extends Controller
{

    public function showEdit(suruburi $suruburi)
    {
        return view('edit-suruburi', ['suruburi' => $suruburi]);
    }

    public function deleteProdus(suruburi $suruburi)
    {
        $suruburi->delete();
        return redirect('/suruburi');
    }

    public function produsEdit(suruburi $suruburi, Request $request)
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

        $suruburi->update($incomingFields);
        return redirect('/suruburi');
    }
    public function createSuruburi(Request $request)
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
        suruburi::create($incomingFields);

        return redirect('/suruburi');
    }
    public function showcreate()
    {
        return view('create_suruburi_produs');
    }
}
