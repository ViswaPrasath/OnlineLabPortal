<?php

namespace App\Http\Controllers;
use App\Paper;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $papers = Paper::select('id','name','code')->get();

        return \view('dashboard')->with(['papers'=>$papers]);
    }
}
