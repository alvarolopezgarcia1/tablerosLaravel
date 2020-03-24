<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    //
    public function view(Request $req)
    {
        $idt = $req->input('id') ;
        $not = Nota::where('idNot', $idt)->get() ; 
      
        return view('notas.ver', ['notas' => $not]) ;

    }
}
