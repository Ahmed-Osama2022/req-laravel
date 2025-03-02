<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputForm extends Controller
{
  public function index()
  {
    return view('form');
  }
  public function colors_values(Request $request)
  {
    return  $request->input();
    // YOU CAN SEARCH BY A KEY;
    // return  $request->input('colors');

    // OR -> to grap a specific value
    // return  $request->input('colors.0');
    // return  $request->input('colors.1');


    // YOU CAN USE THE DEFUALT VALUE; IF THERE IS NO VALUE RETURNED!
    // return  $request->input('colors.4', 'JOSE');
    // return  $request->input('colors.4') ?? 'JOSE';
  }
  public function date_form(Request $request)
  {
    // date_default_timezone_set('Africa/Cairo');
    // echo date_default_timezone_get();

    return view('dateForm');
  }

  public function date(Request $request)
  {
    // dd($request->input());
    // dd(gettype($request->input('reservation'))); // "string"

    // === OR; YOU CAN USE "Carbon API" FOR A MORE ADVANCED FEATURES WITH DATE AND TIME! ===
    // dd(gettype($request->date('reservation'))); // // "object"

    $obj = $request->date('reservation', 'Y-m-d');
    return  $obj->diffForHumans();
  }
}
