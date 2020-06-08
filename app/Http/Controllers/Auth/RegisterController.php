<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming user registration request.
     *
     * @param array $data
     *
     * @return ValidationValidator
     */
    protected function validator(array $data): ValidationValidator
    {
        $messages = [
            'email.required' => 'We need to know your e-mail address!',
            'date_of_birth.before' => 'Are you a time traveler?',
            'date_of_birth.required' => 'We need to know your birthday!',
            'password.required' => 'How will you log in?',
            'password.confirmed' => 'Passwords must match!',
            'password.regex' => 'Your password needs to contain an uppercase character (A – Z), a lowercase character (a – z) and a digit (0 – 9).',
        ];

        $rules = [
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'date_of_birth' => ['required', 'date_format:Y-m-d', 'before:today'],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/^.*(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/',
            ],
        ];

        return Validator::make($data, $rules, $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    protected function create(array $data): User
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'date_of_birth' => $data['date_of_birth'],
            'password' => Hash::make($data['password']),
            'subscription' => 'Free',
        ]);
    }

    public function showVenueRegister()
    {
        return view('venue.register');
    }

    // create a new venue and redirect to login afterwards
    public function handleVenueRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|max:50',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $venue = new \App\Venue();
        $venue->name = $request->input('name');
        $venue->email = $request->input('email');
        $venue->password = Hash::make($request->input('password'));
        $venue->save();

        return redirect('venue/home');
    }
}
