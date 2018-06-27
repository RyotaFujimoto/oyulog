<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Oyulog;

class OyulogsController extends Controller
{
    
    public function index(Request $request)
    {
        $oyulogs = Oyulog::all();
        
        return view('oyulogs.index', [
          'oyulogs' => $oyulogs,
        ]);
        
    }
    
    public function create()
    {
        $oyulog = new Oyulog;

        return view('oyulogs.create', [
            'oyulog' => $oyulog,
        ]);
    }

    
    public function store(Request $request)
    {
        // var_dump($request->status);
        // exit;
        $oyulog = new Oyulog;
        $oyulog->id = $request->id;
        $oyulog->name = $request->name;
        $oyulog->price = $request->price;
        $oyulog->place = $request->place;
        $oyulog->image = $request->image;
        $oyulog->save();
        return redirect('/');
    }

    
    public function show($id)
    {
        $oyulog = Oyulog::find($id);
        
        return view('oyulogs.show', [
            'oyulog' => $oyulog,
        ]);
       
       // return view('tasks.show', $data);
    }

    
    public function edit($id)
    {
        $oyulog = Oyulog::find($id);
        return view('oyulogs.edit', [
            'oyulog' => $oyulog,
        ]);
        
    
    return redirect('/');
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:10',
            'price' => 'required|max:191',
            'place' => 'required|max:191',
            'image' => 'required|max:191',
        ]);
        
        $oyulog = Oyulog::find($id);
        $oyulog->name = $request->name; 
        $oyulog->price = $request->price;
        $oyulog->place = $request->place;
        $oyulog->image = $request->image;
        $oyulog->save();

        return redirect('/');
    }

    
    public function destroy($id)
    {
         $oyulog = Oyulog::find($id);
        $oyulog->delete();
        
        return redirect('/');
    }
}










