<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall;
use Illuminate\View\View;

class HallController extends Controller
{
    public function indexHall ()
    {
        $halls = Hall::select('name', 'rows', 'seats')->get();
        return view ('halls', compact('halls'));
    }

    public function createHall ():View
    {
        return view('halls.create');
    }

    public function storeHall (Request $request)
    {
        return redirect()->route('halls.index')->with('success', 'Зал успешно создан');
    }
}
