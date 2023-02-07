<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Table;
use App\Enums\TableStatus;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function create()
    {
        $tables = Table::where('status', TableStatus::Available)->get();
        return view('admin.reservations.create', compact('tables'));
    }

    public function store(ReservationStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
          return back()->with('warning', 'Maximum number of guest is ' . $table->guest_number . ' pax.');
        }
        $request_date = Carbon::parse($request->res_date);
        foreach ($table->reservations as $res) {
          if($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')){
            return back()->with('warning', 'This table is already reserved for this date.');
          }
        }
        Reservation::create($request->validated());
        return to_route('admin.reservations.index')->with('success', 'Reservation successfully created.');
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
