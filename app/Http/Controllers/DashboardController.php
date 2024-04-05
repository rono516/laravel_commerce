<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function manage_goods(){
        $categories = Category::all();

        return view('dashboardlayouts.manage_goods')->with([
            'categories' => $categories
        ]);
    }
}
