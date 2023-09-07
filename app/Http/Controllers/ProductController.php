<?php

namespace App\Http\Controllers;
use App\Models\Dish;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $dishes = Dish::paginate();

        return view('welcome', compact('dishes'));
          
    }
}
