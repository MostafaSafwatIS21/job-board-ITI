<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Employer;
use App\Models\User;
use Carbon\Carbon;
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
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:employer,candidate'],
            'phone' => ['required', 'string', 'max:255', 'unique:users', 'regex:/^01[0-2,5]{1}[0-9]{8}$/'],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        //        dd($data);
        $avatarPath = 'user/defalute-icons.png';

        // Handle avatar upload if provided
        if (isset($data['avatar'])) {
            $avatar = $data['avatar'];
            $extension = $avatar->getClientOriginalExtension();

            $timestamp = Carbon::now()->timestamp;
            $newFilename = $timestamp.'.'.$extension;

            $avatarPath = $avatar->storeAs('user', $newFilename, 'public');
        }

        //         Create the user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'] ?? 'candidate',
            'phone' => $data['phone'],
            'avatar' => $avatarPath,
        ]);
        //         Create related models based on user role

        if ($data['role'] === 'candidate') {
            Candidate::create([
                'user_id' => $user->id,
            ]);

        }
        if ($data['role'] === 'employer') {
            Employer::create([
                'user_id' => $user->id,
                'company_name' => $data['name'],
            ]);
        }

        return $user;

    }
}
