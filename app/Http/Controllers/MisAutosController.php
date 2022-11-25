<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MisAutosController extends Controller
{
    
    public function misCarros($id_auto){
      return view('misCarros');;
    }
}
