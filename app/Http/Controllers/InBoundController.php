<?php

namespace App\Http\Controllers;

use App\Models\InBound;
use Illuminate\Http\Request;

class InBoundController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = InBound::paginate(10);
            return view('pages.admin.inbound.list',compact('collection'));
        }
        return view('pages.admin.inbound.main');
    }

    
    public function create()
    {
        return view('pages.admin.inbound.input',['inbound'=>new InBound]);
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