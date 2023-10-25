<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GigModel;
use App\Models\OrderModel;
use App\Models\ProfileModel;
use App\Models\ScheduleModel;
use App\Models\ScheduleStatusModel;
use DB;
use Illuminate\Http\Request;

class AdmSchedulesController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:schedule-list|schedule-create|schedule-edit|schedule-delete'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:schedule-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:schedule-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:schedule-delete'], ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $schedules = ScheduleModel::orderBy('id', 'DESC')->paginate(5);
        return view('backend.pages.schedules.index', compact('schedules'));
    }

    public function create()
    {
        $orders = OrderModel::get();
        $gigs = GigModel::get();
        $artists = ProfileModel::where('user_type', '=', 4)->get();
        $customers = ProfileModel::where('user_type', '=', 5)->get();
        $schedule_status = ScheduleStatusModel::get();

        return view('backend.pages.schedules.create', compact(
            'orders',
            'gigs',
            'artists',
            'customers',
            'schedule_status',
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'order_id' => 'numeric',
            'gig_id' => 'required|numeric',
            'artist_id' => 'required|numeric',
            'customer_id' => 'numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required',
        ]);

        $schedule = ScheduleModel::create([
            'order_id' => $request->input('order_id'),
            'gig_id' => $request->input('gig_id'),
            'artist_id' => $request->input('artist_id'),
            'customer_id' => $request->input('customer_id'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('admin.schedules.index')
            ->with('success', 'Schedule created successfully');
    }

    public function show($id)
    {
        $schedule = ScheduleModel::find($id);
        $orders = OrderModel::get();
        $gigs = GigModel::get();
        $artists = ProfileModel::where('user_type', '=', 4)->get();
        $customers = ProfileModel::where('user_type', '=', 5)->get();
        $schedule_status = ScheduleStatusModel::get();


        return view('backend.pages.schedules.show', compact('schedule', 'orders','gigs','artists','customers','schedule_status'));
    }

    public function edit($id)
    {
        $schedule = ScheduleModel::find($id);
        $orders = OrderModel::get();
        $gigs = GigModel::get();
        $artists = ProfileModel::where('user_type', '=', 4)->get();
        $customers = ProfileModel::where('user_type', '=', 5)->get();
        $schedule_status = ScheduleStatusModel::get();

        return view('backend.pages.schedules.edit', compact('schedule', 'orders','gigs','artists','customers','schedule_status'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'order_id' => 'numeric',
            'gig_id' => 'required|numeric',
            'artist_id' => 'required|numeric',
            'customer_id' => 'numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required',
        ]);

        $schedule = ScheduleModel::find($id);
        $schedule->order_id = $request->input('order_id');
        $schedule->gig_id = $request->input('gig_id');
        $schedule->artist_id = $request->input('artist_id');
        $schedule->customer_id = $request->input('customer_id');
        $schedule->start_date = $request->input('start_date');
        $schedule->end_date = $request->input('end_date');
        $schedule->status = $request->input('status');
        $schedule->save();

        return redirect()->route('admin.schedules.index')
            ->with('success', 'Schedule updated successfully');
    }

    public function destroy($id)
    {
        DB::table("schedules")->where('id', $id)->delete();
        return redirect()->route('admin.schedules.index')
            ->with('success', 'Schedule deleted successfully');
    }
}
