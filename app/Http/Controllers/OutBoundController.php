<?php

namespace App\Http\Controllers;

use App\Models\OutBound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use PDF;

class OutBoundController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = OutBound::where('vessel_name','like','%'.$keywords.'%')
            ->orWhere('id_vessel','like','%'.$keywords.'%')
            ->paginate(10);
            return view('pages.admin.outbound.list',compact('collection'));
        }
        return view('pages.admin.outbound.main');
    }

    
    public function create()
    {
        return view('pages.admin.outbound.input',['outbound'=>new OutBound]);
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
        $outbound = new OutBound;
        $outbound->vessel_name = $request->vasselname;
        $outbound->id_vessel = $request->idvessel;
        $outbound->eta = $request->eta;
        $outbound->etd = $request->etd;
        $outbound->container_number = $request->containernumber;
        $outbound->po = $request->po;
        $outbound->description = $request->description;
        $outbound->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Manifest OutBound '. $request->vasselname . ' tersimpan',
        ]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(OutBound $outbound)
    {
        return view('pages.admin.outbound.input', compact('outbound'));
    }

    
    public function update(Request $request, OutBound $outbound)
    {
        $validator = Validator::make($request->all(), [
            'eta' => 'required',
            'etd' => 'required',
            'containernumber' => 'required',
            'idvessel' => 'required',
            'vasselname' => 'required',
            'description' => 'required',
            'po' => 'required',
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
            }elseif ($errors->has('etd')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('etd'),
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
        $outbound->vessel_name = $request->vasselname;
        $outbound->id_vessel = $request->idvessel;
        $outbound->eta = $request->eta;
        $outbound->etd = $request->etd;
        $outbound->container_number = $request->containernumber;
        $outbound->po = $request->po;
        $outbound->description = $request->description;
        $outbound->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Manifest Outbound '. $request->vasselname . ' diperbaharui',
        ]);
    }

    
    public function destroy(OutBound $outbound)
    {
        $outbound->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Manifest Outbound'. $outbound->vessel_name . ' terhapus',
        ]);
    }

    public static function pdfDownload(){
        $data = OutBound::get();
        $pdf = PDF::loadView('pages.admin.outbound.pdf',compact('data'));
        return $pdf->download('Data Manifest Outbound Cargo.pdf');
    }
}