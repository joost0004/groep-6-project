<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
        ->where('function', '=', 'admin')
        ->orWhere('function', '=', 'werknemer')
        ->get();

        if ($this->validateFunction()) {
            return view('functions.admin.admin-page.index', ['users' => $users]);
        } else{
            return redirect('/');
        }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('registrations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Registration::create($request->validate([
        //     'voorletters' => 'required',
        //     'voornaam' => 'required',
        //     'geslacht' => 'required',
        //     'adres' => 'required',
        //     'postcode' => 'required',
        //     'gemeente' => 'required',
        //     'regio' => 'required',
        //     'verwijzer' => 'required'
        // ]));
        return redirect('/admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('functions.admin.admin-page.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('functions.admin.admin-page.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // $registration -> update($this->validateRequirement());

        $user->update($request->validate([
            'voornaam'=>'required'
        ]));
        return redirect('/registration/' . $registration->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin');
    }

    public function validateFunction()
    {
        // if (Auth::user()->function = 'admin') {
        //     return true;
        // } else {
        //     return false;
        // }

        switch (Auth::user()->function) {
            case 'admin':
                return true;
                break;

            default:
                return false;
                break;
        }

    }

}
