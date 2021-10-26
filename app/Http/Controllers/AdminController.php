<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    function index(Request $request){

        return view('admin.register'); 

        }    
    
    function dashboard(){
        
        // $users =  DB::table('users');
        $admins = AdminModel::all();
        $session = session('data','XD');
        


        return view('admin.dashboard')
        ->with('admins',$admins)
        ->with('custom_message',$session);
        
    }
    
    function logout(Request $request){

        session()->flush();

        return redirect('');

    }
    
    function loginAdmin(Request $request){

        $response = new Response;
        $validatedData = $request->validate([
            
            'username' => 'required',
            'password' => 'required'

        ]);

        $user = AdminModel::where('admin_username','=',$validatedData['username'])->first();

        if(isset($user)){

            $username = $user->admin_username;
            $hashedPassword = $user->admin_password;
            $password = $validatedData['password'];
            $id = $user->id;
            
            if($username === null){
                
                return view('register')->with('errors','Not username registered');
    
            }
            
            if(Hash::check($password, $hashedPassword)){
                
                $admin_id = session(['admin_id' => $id]);
                session(['admin_name'=>$user->admin_name]);
                session(['admin_last_name'=>$user->admin_last_name]);

                // session()->regenerate();

                return redirect('admin/dashboard');
    
                // session(['admin_id' => $id]);
                
            }

        }

        return redirect('admin/login');

    // $admins_username = DB::table('admins')->get()->where();

    }

    function showUsers(){

        $users = DB::table('users')->get();

        return view('admin.users' , ['users' => $users]);

    }


    function createAdmin(Request $request){
        
        $admin = new AdminModel;
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'last_name' =>'required|max:255',
            'username' => 'required|max:255|unique:App\models\AdminModel,admin_username',
            'email' => 'required|max:255',
            'password' => 'required|min:4',
            'confirm_password' => 'same:password'
        ]);

        $admin->admin_name = $validatedData['name'];
        $admin->admin_last_name = $validatedData['last_name'];
        $admin->admin_username = $validatedData['username'];
        $admin->admin_password = Hash::make($validatedData['password']);
        $admin->admin_email = $validatedData['email'];

        $admin->save();

        return redirect('admin/login');

    }

}
