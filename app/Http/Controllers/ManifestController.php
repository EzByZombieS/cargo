<?php

namespace App\Http\Controllers;

use App\Models\InBound;
use Illuminate\Http\Request;

class ManifestController extends Controller
{
    
    public function index(Request $request)
    {
        // if ($request->ajax()) {
        //     $collection = InBound::paginate(10);
        //     return view('pages.admin.inbound.list',compact('collection'));
        // }
        return view('pages.user.manifest.main');
    }

    
    public function create()
    {
        //
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