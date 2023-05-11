<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Contracts\Session\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        if (!Auth::validate($credentials)) :
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request, $user);
    }

    public function redirectToProvider($provider)
    {

        $provider = Socialite::driver($provider)->redirect();
        return redirect()->to($provider->getTargetUrl());
    }

    public function handleProviderCallback(Request $request, $provider)
    {

        $providerUser = Socialite::driver($provider)->user();
        $user = User::firstOrCreate(['email' => $providerUser->getEmail()], [
            'name' => $providerUser->getName() ?? $providerUser->getNickname(),
            'provider_id' => $providerUser->getId(),
            'provider' => $provider
        ]);

        Auth::login($user);
        $token = $user->createToken('authToken')->plainTextToken;
        $tokenJWT = $user->createToken('JWT')->plainTextToken;
        $request->session()->put('tkyplus', $tokenJWT);

        // return redirect($this->redirectTo);
        //return redirect()->intended();
        return redirect('/dashboard')
            ->header('Authorization', 'Bearer ' . $tokenJWT)
            ->with('tokenJWT', $tokenJWT);
    }


    protected function authenticated(Request $request, $user)
    {
        //return redirect()->intended();
        return redirect('/dashboard');
    }
}
