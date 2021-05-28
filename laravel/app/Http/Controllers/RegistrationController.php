<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrations.index', ['registrations' => User::all()]);
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
        $request->validate([
            'function' => 'required|string',
            'voornaam' => 'required|string|max:20',
            'achternaam' => 'required|string|max:20',
            'geslacht' => 'required|string|max:10',
            'postcode' => 'required|string|max:6',
            'adres' => 'required|string|max:50',
            'stad' => 'required|string|max:20',
            'verwijzer' => 'required|string|max:40',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'function' => $request->function,
            'voornaam' => $request->voornaam,
            'achternaam' => $request->achternaam,
            'geslacht' => $request->geslacht,
            'postcode' => $request->postcode,
            'adres' => $request->adres,
            'stad' => $request->stad,
            'verwijzer' => $request->verwijzer,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect('/registration');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(User $registration)
    {
        return view('registrations.show', ['registration' => $registration]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(User $registration)
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
    public function update(Request $request, User $registration)
    {
        $registration->update($request->validate([
            'function' => 'required|string',
            'voornaam' => 'required|string|max:20',
            'achternaam' => 'required|string|max:20',
            'geslacht' => 'required|string|max:10',
            'postcode' => 'required|string|max:6',
            'adres' => 'required|string|max:50',
            'stad' => 'required|string|max:20',
            'verwijzer' => 'required|string|max:40',
            'email' => 'required|string|email|max:255',
        ]));
        return redirect('/registration/' . $registration->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $registration)
    {
        $registration->delete();
        return redirect('/registration');
    }

}
