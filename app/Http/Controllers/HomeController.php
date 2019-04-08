<?php

namespace App\Http\Controllers;

use App\Model\Kpopnew;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $perPage = 9;
        $kpopnew = Kpopnew::where('status','1')->orderBy('id','desc')->simplePaginate($perPage);
        return view('home', compact('kpopnew'));
    }

    public function show($id)
    {
        $rs = Kpopnew::findOrFail($id);
        return view('view', compact('rs'));
    }
}
