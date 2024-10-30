<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purch;

class PurchController extends Controller
{
    public function index() {
        $purchs = Purch::orderBy('name', 'desc')->cursorPaginate(2);
        return view('index', compact('purchs'));
    }

    public function show(Request $request) {

        Purch::Create(attributes:[
            'name' => $request->name,
            'cost' => $request->cost,
            'status' => false,
        ]);

        return redirect(to: '/purchs');
    }
    public function change($id) {
        $purchs = Purch::findOrFail($id);
        $purchs->status = true;
        $purchs->save();

        return redirect(to: '/purchs');
    }
}
