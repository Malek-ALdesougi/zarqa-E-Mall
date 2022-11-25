<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //the register user validation and store to the database
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'address' => 'required',
            'phone' => 'required|numeric|digits:10|starts_with:07',
            'image' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->address = $request->address;
        $newUser->phone = $request->phone;
        $newUser->image = base64_encode(file_get_contents($request->file('image')));
        $newUser->password = Hash::make($request->password);

        $newUser->save();
        Auth::login($newUser);

        return redirect('/index');
    }

    public function ownerRegister(Request $request){

        //change the input names -------> 
        // dd($request);
        $credintionals = ['name' => $request->owner_name, 'email'=> $request->owner_email, '']

        $request->validate([
            'owner_name' => 'required',
            'owner_email' => 'required|unique:users',
            'store_name' => 'required',//
            'owner_phone' => 'required|numeric|digits:10|starts_with:07',
            'category' => 'required',//
            'description' => 'required',//
            'store_address' => 'required|max:50',
            'store_image' => 'required',
            'owner_password' => 'required|min:8|confirmed'

        ]);

        $newOwner = new User;
        $newOwner->name = $request->owner_name;
        $newOwner->email = $request->owner_email;
        $newOwner->address = $request->store_address;
        $newOwner->phone = $request->owner_phone;
        $newOwner->image = base64_decode(file_get_contents($request->file('store_image')));
        $newOwner->password = Hash::make($request->owner_password);

        $newOwner->save();
       //------------------
        $newStore = new Store;
        $newStore->user_id = $newOwner->id;
        $newStore->name = $request->store_name;
        $newStore->category = $request->category;
        $newStore->description = $request->description;

        return redirect('/owner');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(){

        Auth::logout();
        Session::flush();

        return redirect('index');
        
    }
}
