<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Category;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data['dishes']=Dish::paginate();
        return view('dishes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dishes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dataDish = $request->all();
        $dataDish = $request->except('_token');
        /*if ($request->hasFile('Foto')){ 
            $dataDish['Photo']=$request->file("Photo")->store( ‘uploads’, ‘public’);*/
            

        Dish::create($dataDish);

        //return response()->json($dataDish);
        return redirect('dishes')->with('message', 'Plato agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    /*public function show(dishes $dishes)
    {
        //
        $dish = Dishes::find($id);
        return view();
    }
*/
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dish = Dish::findOrFail($id);
        $categories = Category::all();
        return view('dishes.edit', compact('dish', 'categories'));
        
    }

    /**
     * Update the specified resource in storage.
     */
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
        return redirect('dishes');
        return redirect('dishes')->with('message', 'Plato eliminado');
    }
}
