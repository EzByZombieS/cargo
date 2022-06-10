<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ScheduleController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = Schedule::where('vessel_name','like','%'.$keywords.'%')
            ->paginate(10);
            return view('pages.admin.schedule.list',compact('collection'));
        }
        return view('pages.admin.schedule.main');
    }

    
    public function create()
    {
        return view('pages.admin.schedule.input',['schedule'=>new Schedule]);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'eta' => 'required',
            'etd' => 'required',
            'idvessel' => 'required',
            'vasselname' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('eta')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('eta'),
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
            }elseif ($errors->has('vasselname')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('vasselname'),
                ]);
            }
        }
        $schedule = new Schedule;
        $schedule->vessel_name = $request->vasselname;
        $schedule->id_vessel = $request->idvessel;
        $schedule->eta = $request->eta;
        $schedule->etd = $request->etd;
        $schedule->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Jadwal '. $request->vasselname . ' tersimpan',
        ]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Schedule $schedule)
    {
        return view('pages.admin.schedule.input', compact('schedule'));
    }

    
    public function update(Request $request, Schedule $schedule)
    {
        $validator = Validator::make($request->all(), [
            'eta' => 'required',
            'etd' => 'required',
            'idvessel' => 'required',
            'vasselname' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('eta')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('eta'),
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
            }elseif ($errors->has('vasselname')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('vasselname'),
                ]);
            }
        }
        $schedule->vessel_name = $request->vasselname;
        $schedule->id_vessel = $request->idvessel;
        $schedule->eta = $request->eta;
        $schedule->etd = $request->etd;
        $schedule->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Jadwal '. $request->vasselname . ' diperbaharui',
        ]);
    }

    
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Jadwal'. $schedule->vessel_name . ' terhapus',
        ]);
    }
}