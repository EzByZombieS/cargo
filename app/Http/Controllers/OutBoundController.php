<?php

namespace App\Http\Controllers;

use App\Models\OutBound;
use Illuminate\Http\Request;

class OutBoundController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = OutBound::paginate(10);
            return view('pages.admin.outbound.list',compact('collection'));
        }
        return view('pages.admin.outbound.main');
    }

    
    public function create()
    {
        return view('pages.admin.inbound.input',['outbound'=>new OutBound]);
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}