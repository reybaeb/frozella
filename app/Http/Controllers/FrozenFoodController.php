<?php

namespace App\Http\Controllers;

use App\Models\FrozenFood;
use Illuminate\Http\Request;

class FrozenFoodController extends Controller
{
    public function index()
    {
        $frozenFoods = FrozenFood::all();
        return view('frozen-food', compact('frozenFoods'));
    }

    public function show(FrozenFood $frozenFood)
    {
        return view('frozen-food-detail', compact('frozenFood'));
    }
} 