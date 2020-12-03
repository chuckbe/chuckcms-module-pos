<?php

namespace Chuckbe\ChuckcmsModulePos\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PosController extends Controller
{
    /**
     * Create a new controller instance
     * 
     * @return void
     */
    public function __contruct()
    {

    }

    public function index()
    {
        return view('chuckcms-module-pos::backend.dashboard.index');
    }
}