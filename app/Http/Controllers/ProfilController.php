<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function getInfos()
    {
        return view('infos');
    }
    public function postInfos(Request $request)
    {
        return 'PROFIL<br>Nom : ' . $request->input('nom');
    }
}