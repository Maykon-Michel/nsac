<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use Illuminate\Foundation\Auth\AuthenticatesUsers;
    use Illuminate\Http\Request;

    class LoginController extends Controller {
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
        protected $redirectTo = '/';

        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct() {
            $this->middleware('guest')->except('logout');
        }

        public function showLoginForm() {
            return view('index');
        }

        public function login(Request $request) {
            $this->validateLogin($request);

            if ($this->attemptLogin($request)) {
                return $this->sendLoginResponse($request);
            }

            return $this->sendFailedLoginResponse($request);
        }

        protected function sendLoginResponse(Request $request) {
            $request->session()->regenerate();

            return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
        }

        protected function credentials(Request $request) {
            return [
                filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'matricula'
                => $request->email,
                'password' => $request->password,
            ];
        }
    }
