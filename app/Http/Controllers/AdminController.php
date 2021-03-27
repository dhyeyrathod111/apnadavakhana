<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function loginform(Request $request)
    {
        return view('admin.login');
    }
    public function adminregistrationform(Request $request)
    {
        return view('admin.registration');   
    }
    public function registrationprocess(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required'], 
            'password' => ['required'],
        ]);
        if ($validator->fails()) {
            $this->response['status'] = FALSE;
            $this->response['validation'] = TRUE;
            $this->response['message'] = implode("<br />",$validator->messages()->all());
        } else {
            $admin = new Admin;
            $admin->name = $request->name;
            $admin->password = \Hash::make($request->password);
            $admin->email = $request->email;
            if ($admin->save()) {
                $this->response['status'] = TRUE;
                $this->response['message'] = 'Your account has been registr successfully.'; 
            } else {
                $this->response['status'] = FALSE;
                $this->response['message'] = 'Sorry, we have to face some technical issues please try again later.';
            }
        }
        return response($this->response, 200)->header('Content-Type', 'application/json');
    }
    public function loginprocess(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required','email'],
            'password' => ['required'],
        ]);
        if ($validator->fails()) {
            $this->response['status'] = FALSE;
            $this->response['message'] = implode("<br />",$validator->messages()->all());
        } else {
            $admininfo = Admin::where(['email'=>$request->email])->first();   
            if (!empty($admininfo) && \Hash::check($request->password,$admininfo->password)) {
                $request->session()->put('admin_id',$admininfo->id);$request->session()->put('admin_email',$admininfo->email);
                $this->response['status'] = TRUE;
                $this->response['message'] = 'Success!';
                $this->response['redirect_url'] = url('admin');
            } else {
                $this->response['status'] = FALSE;
                $this->response['message'] = 'Email id and password is incorrect.';
            }
        }
        return response($this->response, 200)->header('Content-Type', 'application/json');
    }
}
