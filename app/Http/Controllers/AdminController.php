<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  
    public function index()
    {
        return view('Admin.adminLogin');
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request->validate(
            [
                'Mail' => 'email|required',
                'Pass' => 'required',

            ]
        );
        $pass = $request->Pass;

        $admin = Admin::where('Email', $request->Mail)->first();
        
       if($admin !== NULL && Hash::check($pass, $admin->Password))
        {
            
            $request->session()->put(
                [
                    'user_id' => $admin->id,
                    'LoggedIn' => true,
                    'ALoggedIn'=> true,
                    'login' => true,
                ]
            );
            return redirect('/admin-home')->with('message', __('myCustom.welcome-admin'));
        }
        else
        {
            return redirect()->back()->with('message', __('myCustom.incorrect'));
        }
               
    }
    public function AdminRegister()
    {
        return view('Admin.addAdmin');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'Name' => 'required',
                'Email' => 'required|unique:admins',
                'Password' => 'required|confirmed',
                'Password_confirmation' => 'required',
            ]
        );
        $encPass = Hash::make($request->Password);
        $admin = Admin::create(
            [
                'Name' => $request->Name,
                'Password' => $encPass,
                'Email' => $request->Email,
            ]
        );
        $request->session()->put(
            [
                'user_id' => $admin->id,
                'LoggedIn' => true,
                'ALoggedIn'=> true,
                'login' => true,
            ]
        );
        return redirect('/admin-home')->with('message', __('myCustom.add-admin'));
    }

    public function logout(Admin $id) 
    {
        $locale = session('locale');
        session()->invalidate();
        session()->put('locale', $locale);
        return redirect('/admin')->with('logout', __('myCustom.logout'));
    }
    public function showUsers()
    {
        $users = Client::all();
        return view('Admin.users', compact('users')); 
    }
    public function showMessages()
    {
        $messages = Contact::all();
        $users = Client::all();
        $flag = false;
        return view('Admin.messages', compact('messages', 'users', 'flag'));
    }
    public function deleteUser($id)
    {
        $user = Client::where('id', $id)->delete();
        return redirect('/admin-home')->with('message', __('myCustom.user-delete'));   
    }
    public function deleteMessage($id)
    {
        $message = Contact::where('id', $id)->delete();
        return redirect('/admin-home')->with('message', __('myCustom.message-delete'));
    }
}
        //$user = Client::findOrFail($id)->delete();
        //$id->delete();
        //Client::destroy($id);
        //$user = Client::where('id', $id)->delete();
        //$user->delete();
        //Client::destroy($id);
                //$client->delete();