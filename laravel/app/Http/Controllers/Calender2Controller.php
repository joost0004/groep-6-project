<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Calender2Controller extends Controller


{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
        }
        return view('calender');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calender.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Registration::create($request->validate([
            'voorletters' => 'required',
            'voornaam' => 'required',
            'geslacht' => 'required',
            'adres' => 'required',
            'postcode' => 'required',
            'gemeente' => 'required',
            'regio' => 'required',
            'verwijzer' => 'required'
        ]));
        return redirect('/calender');

    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Models\Registration  $registration
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Registration $registration)
//    {
//        return view('registrations.show', ['registration' => $registration]);
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        return view('calender.create', compact('registration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        // $registration -> update($this->validateRequirement());

        $registration->update($request->validate([
            'voornaam'=>'required'
        ]));
        return redirect('/calender/' . $registration->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        $registration->delete();
        return redirect('/calender');
    }

    public function validateRequirement(): array
    {
        return request()->validate([
            'voorletters' => 'required',
            'voornaam' => 'required',
            'geslacht' => 'required',
            'adres' => 'required',
            'postcode' => 'required',
            'gemeente' => 'required',
            'regio' => 'required',
            'vewijzer' => 'required'
        ]);
    }

}
