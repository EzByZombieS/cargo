<?php

namespace App\Http\Controllers;

use App\Models\InBound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use PDF;

class InBoundController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = InBound::where('vessel_name','like','%'.$keywords.'%')
            ->orWhere('id_vessel','like','%'.$keywords.'%')
            ->paginate(10);
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
        $validator = Validator::make($request->all(), [
            'eta' => 'required',
            'containernumber' => 'required',
            'idvessel' => 'required',
            'description' => 'required',
            'vasselname' => 'required',
            'po' => 'required',
            'remaks' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('eta')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('eta'),
                ]);
            }elseif ($errors->has('containernumber')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('containernumber'),
                ]);
            }elseif ($errors->has('idvessel')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('idvessel'),
                ]);
            }elseif ($errors->has('po')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('po'),
                ]);
            }elseif ($errors->has('remaks')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('remaks'),
                ]);
            }elseif ($errors->has('vasselname')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('vasselname'),
                ]);
            }elseif ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description'),
                ]);
            }
        }
        $inbound = new InBound;
        $inbound->vessel_name = $request->vasselname;
        $inbound->id_vessel = $request->idvessel;
        $inbound->eta = $request->eta;
        $inbound->etd = $request->etd;
        $inbound->container_number = $request->containernumber;
        $inbound->po = $request->po;
        $inbound->description = $request->description;
        $inbound->remaks = $request->remaks;
        $inbound->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Manifest Inbound '. $request->vasselname . ' tersimpan',
        ]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(InBound $inbound)
    {
        return view('pages.admin.inbound.input', compact('inbound'));
    }

    
    public function update(Request $request, InBound $inbound)
    {
        $validator = Validator::make($request->all(), [
            'eta' => 'required',
            'etd' => 'required',
            'containernumber' => 'required',
            'idvessel' => 'required',
            'vasselname' => 'required',
            'description' => 'required',
            'po' => 'required',
            'remaks' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('eta')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('eta'),
                ]);
            }elseif ($errors->has('containernumber')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('containernumber'),
                ]);
            }elseif ($errors->has('idvessel')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('idvessel'),
                ]);
            }elseif ($errors->has('po')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('po'),
                ]);
            }elseif ($errors->has('etd')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('etd'),
                ]);
            }elseif ($errors->has('remaks')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('remaks'),
                ]);
            }elseif ($errors->has('vasselname')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('vasselname'),
                ]);
            }elseif ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description'),
                ]);
            }
        }
        $inbound->vessel_name = $request->vasselname;
        $inbound->id_vessel = $request->idvessel;
        $inbound->eta = $request->eta;
        $inbound->etd = $request->etd;
        $inbound->container_number = $request->containernumber;
        $inbound->po = $request->po;
        $inbound->description = $request->description;
        $inbound->remaks = $request->remaks;
        $inbound->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Manifest Inbound '. $request->vasselname . ' diperbaharui',
        ]);
    }

    
    public function destroy(InBound $inbound)
    {
        $inbound->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Manifest InBound'. $inbound->vessel_name . ' terhapus',
        ]);
    }

    public static function pdfDownload(){
        $data = InBound::get();
        $pdf = PDF::loadView('pages.admin.inbound.pdf',compact('data'));
        return $pdf->download('Data Manifest Inbound Cargo.pdf');
    }
}