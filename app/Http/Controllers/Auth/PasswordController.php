<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


 /*For directly login the reset page without the mail conformation randomly generate tokes
 public function showResetForm( $token = null )
    {
        if (auth()->check() && is_null( $token )) { 
             // user is logged in and has no token, in other words, he/she access this route by 
             // clicking a link pointing to "password/reset", so we generate a new token and save it 
             // to the password_resets table
            $token = \Password::getRepository()->create( auth()->user() );
        }

        return view( 'auth.passwords.reset' )->with( 'token', $token );
    }*/
}
