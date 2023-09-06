<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(): View {
        $categories=Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create(): View {
        return view('categories.create');
    }

    public function store(CategoryRequest $request): RedirectResponse {
        
        Category::create($request -> all());
        return redirect()->route('categories.index');
    }

    public function edit(Category $category): View {

        return view('categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category): RedirectResponse {
        
        $category -> update($request ->all());
        return redirect() ->route('categories.index');
    }

    public function destroy(Category $category): RedirectResponse {
        
        $category -> delete();
        return redirect() ->route('categories.index');

    }
}
