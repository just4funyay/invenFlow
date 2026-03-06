<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subbidang;
use App\Models\Category;

class SubbidangController extends Controller
{
    public function create(Request $request) {
        $validated = $request->validate([
            'subbidangName' => 'required|string|max:255',
            'subbidangDescription' => 'required|string|max:255',
        ]); 
        $subbidang = Subbidang::create([
            'name' => $validated['subbidangName'],
            'description' => $validated['subbidangDescription']
        ]);

        return redirect('/monitor/subbidang');
    }

    public function show(){
        return view('monitor.subbidang', [
            'subbidang' => Subbidang::with('categories')->get()
        ]);
    }

    public function subbidangDelete($id)    {
        Subbidang::findOrFail($id)->delete();
        return back()->with('success', 'Subbidang berhasil dihapus.');
    }
}
