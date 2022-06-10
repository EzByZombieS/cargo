<?php

namespace App\Http\Controllers;

use App\Models\InBound;
use Illuminate\Http\Request;
use PDF;

class ManifestController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = InBound::where('vessel_name','like','%'.$keywords.'%')
            ->orWhere('id_vessel','like','%'.$keywords.'%')
            ->paginate(10);
            return view('pages.user.manifest.list',compact('collection'));
        }
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

    public static function pdfDownload(){
        $data = InBound::get();
        $pdf = PDF::loadView('pages.user.manifest.pdf',compact('data'));
        return $pdf->download('Data Manifest Cargo.pdf');
    }
}