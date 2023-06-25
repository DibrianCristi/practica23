<?php

namespace App\Http\Controllers;

use App\Models\uzcasnic;
use Illuminate\Http\Request;

class uzcasnicController extends Controller
{
    public function createUzcasnic(Request $request)
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
        uzcasnic::create($incomingFields);
        return redirect('/uzcasnic');
    }
    public function showcreate()
    {
        return view('create_uzcasnic_produs');
    }
}
