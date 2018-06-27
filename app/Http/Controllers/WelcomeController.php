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
}
