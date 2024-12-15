<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // ----------Register----------------------------
    public function index()
    {
        return view('Client.register');
        
    }

  
    public function store(Request $request)
    {
        $request->validate(
            [
                'user' => 'required|max:255|min:2',
                'email' => 'required|email|unique:clients',
                'age' => 'required|numeric',
                'national_id' => 'required|max:255',
                'password' => 'required|confirmed|min:6|max:255',
                'password_confirmation' => 'required',
                'gender' => 'required',
            ]
        );

        $EncPassword = Hash::make($request->password);
        $client = Client::create(
            [
                'user' => $request->user,
                'email'=> $request->email,
                'age' => $request->age,
                'national_id' => $request->national_id,
                'password' => $EncPassword,
                'mobile' => $request->mobile,
                'gender' => $request->gender,
            ]
        );
        
        $request->session()->put(
            [
                'user_id' => $client->id,
                'LoggedIn' => true,
                'client' => true,
            ]
        );

       return redirect('/home')->with('message', __('myCustom.register-success'));
    
    } 
    // ----------------------Login------------------------
    public function showLogin()
    {
        return view('client.login');
    }
    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|exists:clients',
                'Password' => 'required'

            ]
        );
        $email = $request->email;
        $password = $request->Password;
        $login = Client::where('email', $email )->first();
        if($login !== NULL && Hash::check($password, $login->password))
        {
            $request->session()->put(
                [
                    'user_id' => $login->id,
                    'LoggedIn' => true,
                    'client' => true,
                    'login' => true,
                ]
            );
            return redirect('/home')->with('message', __('myCustom.login-success'));
        }
        else
        {
            return redirect()->back()->with('message', __('myCustom.incorrect'));
        }


    }

 
  
    public function logout(Client $id)
    {
        $locale = session('locale');
        session()->invalidate();
        session()->put('locale', $locale);
        return redirect('/login')->with('logout', __('myCustom.log-out'));
    } 
}
