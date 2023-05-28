<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    // public function storeuser(Request $request){
    //     $name = $request->input('name');
    //     $email = $request->input('email');
    //     $password = bcrypt($request->input('password'));
    //     $country = $request->input('country');
    //     $address = $request->input('address');
        
    //     $user = new User;
    //     $user->name = $name;
    //     $user->email = $email;
    //     $user->password = $password;
    //     $user->country = $country;
    //     $user->address = $address;
    //     $user->save();

    //     auth()->login($user);

    //     return redirect('/')->with('success','Your account has been created!');
    // }
    
    public function storeuser(Request $request)
    {

        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email',
        ]);
        

        $res = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),

            'password' => bcrypt($request->input('password')),
            'country' => $request->input('country'),
            'address' => $request->input('address'),
        ]);
        auth()->login($res);

        if ($res) {
            return redirect()->to('/');
        }
    }


    // public function deleteUser($name)
    // {
    //     DB::table('users')->where('id', '=', $name)->delete();
    //     return redirect('/');
    // }


    // public function show()
    // {
    //     $product = DB::select('select name,email,password,country address from users');

    //     return view('userview');
    // }

    // public function users(){

    //     $userlist = DB::table('users')->get();
    //     return view('userprofile', [
    //         'userlist' => $userlist,
        
    //     ]);
    // }

    public function viewUsers(){
        
        $userlist = DB::table('users')->get();
        return view('userprofile', [
            'userlist' => $userlist,
            
        ]);
    }

    public function user($user){
      
        $selectedUser = DB::table('users')->where('id', '=', $user)->first();
        return view('updateform', [
            'user' => $selectedUser,
        ]);
    }

    public function updateUser(Request $request, $id){
        $user = \App\Models\User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->country = $request->input('country');
        $user->address = $request->input('address');
        $user->save();

        // Example
        // $adddetail = new AddDetail(); //model
        // $adddetail->user_id = \Auth::user()->id;
        // $adddetail->name

        return redirect('/');
    }

  

    public function deleteUser($user){
        DB::table('users')->where('id', '=', $user)->delete();
        return redirect('/userprofile');
    }

}
