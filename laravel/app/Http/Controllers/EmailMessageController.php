<?php

namespace App\Http\Controllers;

use App\Mail\AgendaUitnodiging;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class EmailMessageController extends Controller
{
    public function store(Registration $registration)
    {
        $email = DB::table('registrations')->value('email');

        Mail::to($email)
            ->send(new AgendaUitnodiging());

        return redirect('/registration');
    }
}
