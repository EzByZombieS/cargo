<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Schedule::paginate(10);
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
        //
    }

    
    public function show(Schedule $schedule)
    {
        //
    }

    
    public function edit(Schedule $schedule)
    {
        //
    }

    
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    
    public function destroy(Schedule $schedule)
    {
        //
    }
}