<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Afficher les catégories
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    // Afficher le formulaire d'ajout
    public function create()
    {
        return view('categories.create');
    }

    // Enregistrer une catégorie
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    // Afficher le formulaire de modification
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Modifier une catégorie
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    // Supprimer une catégorie
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index');
    }
}