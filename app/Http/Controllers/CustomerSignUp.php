<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\DB;

class CustomerSignUp extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = DB::select('select * from cities');
        return view('register',['cities' => $cities]);
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
        // Form validation
        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'repeatpassword' => 'required',
            'sex' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'district' => 'required',
            'ward' => 'required'
        ]);
        if($validated['password'] === $validated['repeatpassword']){
            //  Store data in database
            $customer = new Customer([
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'phone' => $request->input('phone'),
                'sex' => $request->input('sex'),
                'city_id' => $request->input('country'),
                'district_id' => $request->input('district'),
                'ward_id' => $request->input('ward')
            ]);
            $customer->save();
            return view('login')->with("success", "Đăng ký thành công! Mời bạn xác thực mail để đăng nhập vào tài khoản");
        }else{
            return view('register')->with("invalid", "Mật khẩu và mật khẩu xác nhận phải trùng nhau");
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
}
