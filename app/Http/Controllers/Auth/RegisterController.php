<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Participant;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
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
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:participant');
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // Validator::make($data, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ])->validate();

        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'phone' => $request['phone'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }
    protected function createParticipant(Request $request)
    {
        // Validator::make($request->all(), [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:participants'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'phone'  => ['required', 'string', 'max:255', 'unique:participants'],
        // ])->validate();
        // $details = [
        //     'name' => $request['name'],
        // ];

        // \Mail::to($request['email'])->send(new \App\Mail\RegisterMail($details));

        // $participant = Participant::create([
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'phone' => $request['phone'],
        //     'password' => Hash::make($request['password']),
        // ]);

        return back()->with('error','Waktu Pendaftaran sudah habis.');
    }


    protected function createAdmin(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ])->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    public function showParticipantRegisterForm()
    {
        return view('auth.register', ['url' => 'participant']);
    }
}
