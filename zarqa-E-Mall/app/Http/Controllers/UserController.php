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
        ], [
            'name.required' => 'حقل الإسم مطلوب',
            'email.required' => 'حقل البريد الإلكتروني مطلوب',
            'email.unique' => 'هذا الحساب مستخدم',
            'address.required' => 'حقل العنوان مطلوب',
            'phone.required' => 'حقل الهاتف مطلوب',
            'phone.numeric' => 'حقل الهاتف يجب ان يحتوي على أرقام فقط',
            'phone.digits' => 'حقل الهاتف يحتوي على 10 أرقام فقط',
            'phone.starts_with' => 'حقل الهاتف يجب أن يبدأ بالأرقام 07',
            'image.required' => 'حقل الصورة مطلوب',
            'password.required' => 'حقل كلمة المرور مطلوب',
            'password.min' => 'حقل كلمة المرور يجب أن يحتوي على 8 خانات على الأقل',
            'passwrod.confirmed' => 'كلمات المرور غير متطابقة'
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

    public function ownerRegister(Request $request)
    {

        $request->validate([
            'owner_name' => 'required', //
            'email' => 'required|unique:users', //
            'store_name' => 'required',
            'owner_phone' => 'required|numeric|digits:10|starts_with:07', //
            'category' => 'required',
            'description' => 'required',
            'store_address' => 'required|max:50', //
            'store_image' => 'required', //
            'owner_password' => 'required|min:8|confirmed' //

        ], [
            'owner_name.required' => 'حقل الإسم مطلوب',
            'email.required' => 'حقل البريد الإلكتروني مطلوب',
            'email.unique' => 'هذا الحساب مستخدم',
            'store_name.required' => 'حقل إسم المتجر مطلوب',
            'owner_phone.required' => 'حقل الهاتف مطلوب',
            'owner_phone.numeric' => 'حقل الهاتف يجب ان يحتوي على أرقام فقط',
            'owner_phone.digits' => 'حقل الهاتف يحتوي على 10 أرقام فقط',
            'owner_phone.starts_with' => 'حقل الهاتف يجب أن يبدأ بالأرقام 07',
            'category.required' => 'حقل فئة المتجر مطلوب',
            'description.required' => 'حقل وصف المتجر مطلوب',
            'store_address.required' => 'حقل العنوان مطلوب',
            'store_image.required' => 'حقل الصورة مطلوب',
            'owner_password.required' => 'حقل كلمة المرور مطلوب',
            'owner_password.min' => 'حقل كلمة المرور يجب أن يحتوي على 8 خانات على الأقل',
            'owner_password.confirmed' => 'كلمات المرور غير متطابقة'
        ]);

        $newOwner = new User;
        $newOwner->roll = 'owner';
        $newOwner->name = $request->owner_name;
        $newOwner->email = $request->email;
        $newOwner->address = $request->store_address;
        $newOwner->phone = $request->owner_phone;
        // $newOwner->image = base64_decode(file_get_contents($request->file('store_image')));
        if($request->hasFile('store_image')){
            $file = $request->file('store_image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.' . $extention;
            $file->move('images/',$fileName);
            $newOwner->image = $fileName;
        }
        $newOwner->password = Hash::make($request->owner_password);

        $newOwner->save();
        //------------------
        $newStore = new Store;
        $newStore->user_id = $newOwner->id;
        $newStore->store_name = $request->store_name;
        $newStore->category = $request->category;
        $newStore->description = $request->description;

        Auth::login($newOwner);
        $newStore->save();

        return redirect('/owner');
    }



    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'حقل البريد الإلكتروني مطلوب',
            'password.required' => 'حقل كلمة المرور مطلوب'
        ]);
        // dd($request->password);
        $credentials = $request->only('email', 'password');

        if (auth::attempt($credentials)) {

            if (Auth::user()->roll == 'user') {
                $request->session()->regenerate();
                return redirect('/index');
            } elseif (Auth::user()->roll == 'owner') {
                // $stores = Auth::user()->stores;
                // $owner = Auth::user();
                $request->session()->regenerate();
                return redirect('/owner');
            }
        } else {
            // dd($request->email);
            return back()->with('error', 'البريد الإلكتروني أو كلمة المرور أو كلاهما غير صحيح');
        }
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

    public function logout()
    {

        Auth::logout();
        Session::flush();

        return redirect('index');
    }
}
