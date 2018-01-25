<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemploController extends Controller
{
    public function now( Request $request) {
      //dd($request);
      $nome = $request->firstname;
      $sobrenome = $request->lastname;
      //dd($nome,$sobrenome);

      return view('welcome');
   }

}
