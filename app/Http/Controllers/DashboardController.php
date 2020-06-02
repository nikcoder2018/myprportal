<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Property;

class DashboardController extends Controller
{
    //
    
    public function index(){
        $data['totalLandlords'] = User::where('role', 'landlord')->count();
        $data['totalProperties'] = Property::all()->count();
    
        return view('contents.dashboard', $data);
    }
}
