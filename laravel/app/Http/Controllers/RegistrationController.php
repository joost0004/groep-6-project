<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('registrations.index', ['registrations' => Registration::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrations.create');
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
            'voornaam' => 'required|string|max:20',
            'achternaam' => 'required|string|max:20',
            'geslacht' => 'required|string|max:10',
            'postcode' => 'required|string|max:6',
            'adres' => 'required|string|max:50',
            'stad' => 'required|string|max:20',
            'verwijzer' => 'required|string|max:40',
            'email' => 'required|string|email|max:255|unique:users',
        ]));
        return redirect('/registration');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        return view('registrations.show', ['registration' => $registration]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        return view('registrations.edit', compact('registration'));
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
        $registration->update($this->validate($request));
        return redirect('/registration/' . $registration->id);
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
        return redirect('/registration');
    }

    /**
     * @param Request $request
     * @return array
     */
    private function validate(Request $request): array
    {
        return $request->validate([
            'voornaam' => 'required|string|max:20',
            'achternaam' => 'required|string|max:20',
            'geslacht' => 'required|string|max:10',
            'postcode' => 'required|string|max:6',
            'adres' => 'required|string|max:50',
            'stad' => 'required|string|max:20',
            'verwijzer' => 'required|string|max:40',
            'email' => 'required|string|email|max:255',
        ]);
    }

}
