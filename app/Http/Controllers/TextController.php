<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Text;
use Carbon\Carbon;
use Freshbitsweb\Laratables\Laratables;

class TextController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('texts.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $request->validate([
          'title' => 'required',
          'description' => 'required',
      ]);

      Text::create($request->all() + [
                                      'publication_date' => Carbon::now(),
                                      'user_id' => Auth::user()->getId()
                                      ]);

      return redirect()->route('home')
                        ->with('success','Text created successfully.');
  }

  /**
   * return data of the simple datatables.
   *
   * @return Json
   */
  public function getTextDatatable()
  {
      return Laratables::recordsOf(Text::class);
  }
}
