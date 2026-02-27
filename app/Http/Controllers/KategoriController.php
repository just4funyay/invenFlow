<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function create(Request $request) {
        $validated = $request->validate([
            'kategori' => 'required|string|max:255',
        ]); 

        $category = Category::create([
            'name' => $validated['nama_kategori']
        ]);

        return redirect('/monitor/subbidang');
    }
    
}
