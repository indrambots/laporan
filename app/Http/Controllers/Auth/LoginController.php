<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Lang;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller{
    protected $maxAttempts = 2; // Default is 5
    protected $decayMinutes = 1; // Default is 1
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('auth.login');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

   public function login(Request $request)
    {
    $this->validateLogin($request);
      if (method_exists($this, 'hasTooManyLoginAttempts') &&
      $this->hasTooManyLoginAttempts($request)) {
        $this->fireLockoutEvent($request);
        return $this->sendLockoutResponse($request);
      }
      if ($this->attemptLogin($request)) {
          if ($request->ajax()) {
              return response(array('message'=>'selamat datang', 'link'=> url('/administrator') ), 200);
          }else{
              return $this->sendLoginResponse($request);
          }
      }
      $this->incrementLoginAttempts($request);
      return $this->sendFailedLoginResponse($request);
    }
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    public function username(){
        return 'username';
    }
    
    protected function sendLockoutResponse(Request $request)
    {
        $seconds = $this->limiter()->availableIn(
            $this->throttleKey($request)
        );
        throw ValidationException::withMessages([
            'throttle' => [Lang::get('auth.throttle', ['seconds' => $seconds])],
            'username' => [Lang::get('auth.throttle', ['seconds' => $seconds])],
        ])->status(Response::HTTP_TOO_MANY_REQUESTS);
    }
    public function register(Request $request){
        $validator = Validator::make($request->all(), User::RULEREGISTER ,[],User::NICENAME);
        if ($validator->fails()) {
            return response(['message'=>'Mohon Koreksi Kembali Inputan anda', 'errors'=> $validator->errors()], 422);
        }else{
            $user= User::create(collect($request->all())->put('level',6)->toArray());
            Auth::login($user);
            return response(array('message'=>'selamat datang', 'link'=> url('/home') ), 200);
        }

    }
}
