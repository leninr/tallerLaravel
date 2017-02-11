<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taller;

class TallerController extends Controller
{
  public function index(){
    $types = Taller::paginate(10);
    return view('ver', compact('types'));
  }

  public function create(){
    return view('taller');
  }

  public function store(Request $request){
    Taller::create([
      'nombre' => $request->input('nombre'),
      'apellido' => $request->input('apellido'),
    ]);

    $types = Taller::paginate(10);
    return view('ver', compact('types'));
  }
}
