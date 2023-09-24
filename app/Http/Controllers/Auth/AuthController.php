<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginFormRequest;
use App\Http\Requests\Auth\RegisterFormRequest;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function LoginForm()
    {
        return view('auth.login');
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function login(LoginFormRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->hasRole('admin')) {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/');
            }

        } else {
            return redirect('/login')->with([
                "error" => "these information do not match any one of our records"
            ]);
        }
    }

    public function register(RegisterFormRequest $request)
    {
        $user = User::create([
            "username" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ])->assignRole($request->role);
        Auth::login($user);
        // $user->notify(new WelcomeEmail());
        return redirect()->intended('/auth/profile')->with([
            "success" => __("Registration successful. You can now log-in.")
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }

    public function Profile()
    {
        $user = Auth::user();
        return view('auth.profile.profile',compact("user"));
    }

    // forget password functions start
    public function showForgetPasswordForm()
    {
        return view('home.auth.forgetpassword.forgetpassword');
    }
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        FacadesMail::send('Mail.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    public function showResetPasswordForm($token)
    {
        return view('home.auth.forgetpassword.forgetPasswordLink', ['token' => $token]);
    }
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/login')->with('message', 'Your password has been changed!');
    }
    // forget password functions END

    // Google auth start
    // public function redirectToGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }


    // public function handleGoogleCallback()
    // {
    //     $googleUser = Socialite::driver('google')->stateless()->user();
    //     $user = User::where('email', $googleUser->email)->first();
    //     if (!$user) {
    //         $user = User::create([
    //             'first_name' => $googleUser->user['given_name'] ?? $googleUser->name,
    //             'last_name' => $googleUser->user['family_name'] ?? '',
    //             'email' => $googleUser->email,
    //             'password' => \Hash::make(rand(100000, 999999)),
    //         ])->assignRole('user');
    //         // $user = User::create(['name' => $googleUser->name, 'email' => $googleUser->email, 'password' => \Hash::make(rand(100000, 999999))]);
    //     }
    //     Auth::login($user);
    //     return redirect()->intended('/')->with([
    //         "success" => __("You are logged in successfully")
    //     ]);
    // }
    // Google auth END
}
