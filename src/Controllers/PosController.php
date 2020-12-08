<?php

namespace Chuckbe\ChuckcmsModulePos\Controllers;

use Chuckbe\Chuckcms\Models\Repeater;
use Chuckbe\ChuckcmsModuleEcommerce\Facades\Product;
use Chuckbe\ChuckcmsModuleEcommerce\Facades\Collection;

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

    public function list()
    {
        $products = Product::getFeatured();
        $collections = Collection::all();
        return response()->json(['products' => $products,'collections' => $collections] );
    }
}