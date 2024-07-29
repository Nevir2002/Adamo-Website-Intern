<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login(LoginRequest $request)
    {
        $fields = $request->validated();

        if (Auth::attempt(['email' => $fields['email'], 'password' => $fields['password']])) {
            $request->session()->regenerate(); // renew session ID to prevent some scam stuff (fake old session ID)
            return to_route('test');
        }

        // if auth failed => flash error
        $request->session()->flash('error', 'Bad credentials');
        // $request->session()->put('hahahaha', 'asdhahsd');
        return to_route('getLogin')->withInput($request->except('password')); // keep old inputs except password
        ;
    }

    public function register(RegisterRequest $request)
    {
        $fields = $request->validated();
        // don't handle failed submits because it's been taken cared of by request form

        $fields['password'] = bcrypt($fields['password']);
        $user = $this->user->create($fields);

        // if want to automatically login after successful register
        // Auth::login($user);
        // return to_route('index');

        // else route back to login
        return to_route('getLogin');
    }
}
