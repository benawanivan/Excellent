<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class GuruAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public function showLoginForm()

    {

        return view('landing');

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:guru')->except('postGuruLogout');

    }
    protected $maxAttempts = 3;
    protected $decayMinutes = 2;

    public function getGuruLogin()
    {
        return view('guru.login');
    }

    public function postGuruLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        if (auth()->guard('guru')->attempt($request->only('username', 'password'))) {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return redirect()->route('guru.jadwal');
        } else {
            $this->incrementLoginAttempts($request);

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }

    public function postGuruLogout()
    {
        auth()->guard('guru')->logout();
        session()->flush();

        return redirect()->route('guru.login');
    }
}
