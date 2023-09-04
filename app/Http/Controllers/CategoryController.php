<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index(): View {
        $categories=Category::all();
        return view('adminViews.categoryIndex', compact('categories'));
    }

    public function create(): View {
        return view('adminViews.categoryCreate');
    }

    public function store(CategoryRequest $request): RedirectResponse {
        
        Category::create($request -> all());
        return redirect()->route('adminViews.categoryIndex');
    }

    public function edit(Category $category): View {

        return view('adminViews.categoryEdit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category): RedirectResponse {
        
        $category -> update($request ->all());
        return redirect() ->route('adminViews.categoryIndex');
    }

    public function destroy(Category $category): RedirectResponse {
        
        $category -> delete();
        return redirect() ->route('adminViews.categoryIndex');

    }
}
