<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\Model\User;
class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {

        $getInfo = Socialite::driver($provider)->user();

        $user = $this->createUser($getInfo,$provider);

        auth()->login($user,true);

        return redirect()->route('home');

    }
    function createUser($getInfo,$provider){

        $user = User::where('providerId', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'providerId' => $getInfo->id,
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'avata' => '/uploads/avata/avatar.jpg'
            ]);
        }
        return $user;
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
