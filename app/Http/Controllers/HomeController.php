<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $departingTrains = Train::whereDate('orario_partenza', '>=', $currentDate)->get();

        return view('home', ['departingTrains' => $departingTrains]);
    }
}
