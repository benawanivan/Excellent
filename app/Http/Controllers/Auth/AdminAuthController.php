<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
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
    protected $redirectTo = 'admin/dashboard';
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
        $this->middleware('guest:admin')->except('postAdminLogout');

    }
    protected $maxAttempts = 3;
    protected $decayMinutes = 2;

    public function getAdminLogin()
    {
        return view('admin.login');
    }

    public function postAdminLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        if (auth()->guard('admin')->attempt($request->only('username', 'password'))) {
            // $request->session()->regenerate();
            // $this->clearLoginAttempts($request);
            return redirect()->route("admin.dashboard");
        } else {
            $this->incrementLoginAttempts($request);

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }

    public function postAdminLogout()
    {
        auth()->guard('admin')->logout();
        session()->flush();

        return redirect()->route('admin.login');
    }
}
