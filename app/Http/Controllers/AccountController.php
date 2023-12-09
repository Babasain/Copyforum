<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use DB;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function insertuser(Request $request){
        request()->validate([
            'email' => 'required|email|unique:accounts',
            
        ]);
         
        $user=$request->signupuser;
        $uemail=$request->email;
        $upassword=$request->password;
        $obj=new Account();
        $obj->username=$user;
        $obj->email=$uemail;
        $obj->password=Hash::make($upassword);
        $obj->save();
        
         return redirect()->back(); 
    }

    public function login(Request $request){
        //dd($request);
        $useremail=$request->loginemail;
        $psw=$request->loginpassword;
        $users=$request->loginuser;
       // dd($users);
         $data=DB::table('accounts')->where('email',$useremail)->first();
         $dbemail=$data->email;
         $dbpsw=$data->password;
         $dbuser=$data->username;
         $dbid=$data->sno;
        // dd($dbid);
          
         if(password_verify($psw,$dbpsw)){
             $request->session()->put('user',$users);
             $request->session()->put('userid',$dbid);
             

         }

         return redirect()->back();
    }
    
     public function logout(){
        session()->flush();
        Auth::logout();
        return redirect('/show');
       
        
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        //
    }
}
