<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class DashboardController extends Controller
{
    public function index()
    {
      return view('dashboard');
    }


}
