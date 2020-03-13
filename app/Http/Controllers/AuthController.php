<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('line')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('line')->user();

        $lineid = $user->getId();
        return view('qr')->with('id',$lineid);
        // $user->token;
    }

}
