<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordExpiredRequest;
use Illuminate\Support\Facades\Hash;


class ExpiredPasswordController extends Controller
{
    public function expired()
    {
        return view('auth.passwords.expired');
    }


    public function postExpired(PasswordExpiredRequest $request)
    {
        if (!Hash::check($request->current_password, $request->user()->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Wrong current password!']);
        }

        $request->user()->update([
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with(['status' => 'Password changed!']);
    }

}
