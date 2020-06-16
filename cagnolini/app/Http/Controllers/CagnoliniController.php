<?php

namespace App\Http\Controllers;

use App\Cagnolini;
use Illuminate\Http\Request;

class CagnoliniController extends Controller
{
    public function index()
    {
        $cagnolini = Cagnolini::all();

        return view('home', compact('cagnolini'));
    }
    public function showCagnolino($id)
    {
        $cagnolino = Cagnolini::findOrFail($id);

        return view('cagnolino', compact('cagnolino'));
    }
}
