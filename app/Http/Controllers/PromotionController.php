<?php

namespace App\Http\Controllers;
use App\Models\Promotions;

use Illuminate\Http\Request;
use Carbon\Carbon;


class PromotionController extends Controller
{
    public function index(){
        $promotions = Promotions::all();
        $currentDate = Carbon::now();
        Promotions::where('end_date', '<', $currentDate)->delete();
        $promotions = Promotions::where('end_date', '>=', $currentDate)->get();
        return view('promotions', compact('promotions'));
    }

}
