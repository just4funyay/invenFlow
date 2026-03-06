<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function create(Request $request) {
        $validated = $request->validate([
            'kategori' => 'required|string|max:255',
            'subbidang_id' => 'required|exists:tbl_subbidang,id'
        ]); 
        var_dump($validated);
        $category = Category::create([
            'name' => $validated['kategori'],
            'subbidang_id' => $validated['subbidang_id']
        ]);
        return back();
    }
    
}
