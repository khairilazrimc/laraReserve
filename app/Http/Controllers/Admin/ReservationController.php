<?php

namespace App\Http\Controllers\Admin;

use App\Models\Table;
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
        $tables = Table::all();
        return view('admin.reservations.create', compact('tables'));
    }

    public function store(ReservationStoreRequest $request)
    {
        Reservation::create($request->validated());
        return to_route('admin.reservations.index');
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
