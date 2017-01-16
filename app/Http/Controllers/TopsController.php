<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class TopsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check()) {
        return view('users.home');
      }
      $add_class = 'ly-top-page';
      return view('top')->with('add_class', $add_class);
    }
}
