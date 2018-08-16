<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class ApiController extends Controller
{
    //

    public function index(){
        $barang = Barang::all();
        $data['barang'] =  $barang;
            return response()->json(['data' => $data]);
        
    }
}
