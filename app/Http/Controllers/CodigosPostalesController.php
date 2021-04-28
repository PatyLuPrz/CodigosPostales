<?php

namespace App\Http\Controllers;

use App\Models\CodigosPostales;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class CodigosPostalesController extends Controller
{
    public function Index(){
        $resultado = Null;
        return view('codigospostales.index',compact('resultado'));
    }

    public function Finder(Request $request)
    {
        $cp = $request->cp;
        $resultado = CodigosPostales::where('cp','=',$cp)->get();
        return view('codigospostales.index',compact('resultado'));
    }
}
