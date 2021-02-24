<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
// for add form]
use App\Users;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }  

    public function registration()
    {
        return view('registration');
    }
    
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        //'contact_number' => 'required|contact_number|unique:users',
        'password' => 'required|min:6',
        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
    public function dashboard()
    {

      if(Auth::check()){
        $data = DB::table('users')->get();
      return view ('dashboard', ['data' =>$data]);
        // return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

 public function create(array $data)
 {
   return User::create([
     'name' => $data['name'],
     'email' => $data['email'],
     'password' => Hash::make($data['password'])
   ]);
 }
 
 public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

    public function information() {
      $data = DB::table('users')->get();
      return view ('user', ['data' =>$data]);
    }

    public function save(Request $req)
    {
      print_r($req->input());
      $user= new Users;
      $user->name= $req->name;
      $user->email= $req->email;
      $user->phone= $req->phone;
      $user->address= $req->address;
      $user->type= $req->type;
      $user->gender= $req->gender;
      $user->message= $req->message;
      echo $user->save();
      // return view ('user', ['data' =>$data]);

      $data = DB::table('users')->get();
      // return view ('dashboard', ['data' =>$data]);
    }

    public function showData()
    {
      $data = DB::table('contacts')->paginate(5);
      return view ('showData', ['data' =>$data]);
        // return view('showData');
    } 
}
