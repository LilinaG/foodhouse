<?php

namespace App\Http\Controllers;

use App\Models\dishes;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data['dishes']=Dishes::paginate(5);
        return view('dishes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dishes.create');
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
            

        Dishes::create($dataDish);

         return response()->json($dataDish);
    }

    /**
     * Display the specified resource.
     */
    public function show(dishes $dishes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dishes $dishes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dishes $dish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_dish)
    {
        //
        Dishes::destroy($id_dish);
        return redirect('dishes');
    }
}
