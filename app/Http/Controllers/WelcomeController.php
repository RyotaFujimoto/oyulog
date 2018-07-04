<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Oyulog;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $oyulogs = Oyulog::orderBy('updated_at', 'desc')->paginate(20);
          return view('welcome', [
          'oyulogs' => $oyulogs,
          ]);
    }
    
    public function search(Request $request)
    {
        $result = Oyulog::where('name','LIKE',$request->name)->get()->first();
        return view('oyulogs.result',compact('result'));
        
        $resultx = Oyulog::where('place','LIKE',$request->place)->get()->first();
        return view('oyulogs.result',compact('resultx'));
        
        $resulty = Oyulog::where('price','LIKE',$request->price)->get()->first();
        return view('oyulogs.result',compact('resulty'));
    }
}
