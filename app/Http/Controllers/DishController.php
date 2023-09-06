<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Category;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $data['dishes']=Dish::paginate();
        return view('dishes.index', $data);
    }

    public function create()
    {
        $categories = Category::all();
        return view('dishes.create', compact('categories'));
    }

   
    public function store(Request $request)
    {
        $dataDish = $request->all();
        $dataDish = $request->except('_token');
       
        Dish::create($dataDish);

        return redirect('admin/dishes')->with('message', 'Plato agregado con éxito');
    }


    public function edit($id)
    {
        $dish = Dish::findOrFail($id);
        $categories = Category::all();
        return view('dishes.edit', compact('dish', 'categories'));
    }

   
    public function update(Request $request, $id)
    {
        $dataDish = $request->except(['_token', '_method']);
        Dish::where('id', '=', $id)->update($dataDish);
        $dish = Dish::findOrFail($id);

        $categories = Category::all();

        return view('dishes.edit', compact('dish', 'categories'));
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Dishes $dish
     * @return \Illuminate\Http\Response


     */
    public function destroy($id)
    {
        Dish::destroy($id);
        return redirect('admin/dishes');
        return redirect('admin/dishes')->with('message', 'Plato eliminado');
    }
}
