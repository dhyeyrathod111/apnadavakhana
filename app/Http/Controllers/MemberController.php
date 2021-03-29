<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    protected $data = array();protected $response = array();
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
        $this->data['member'] = Member::find(1);
        return view('website.registrationform',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new Member;
        $member->contact_no = $request->contact_no;
        $member->otp = rand(10000,99999);
        if ($member->save()) {
            $this->data['id'] = $member->id;
            $this->response['status'] = TRUE;
        } else {
            $this->response['status'] = FALSE;
            $this->response['message'] = 'Sorry, we have to face some technical issues please try again later.';
        }
        return response($this->response, 200)->header('Content-Type', 'application/json');
    }
    public function otpformprocess(Request $request)
    {
        if (Member::where(['otp'=>$request->otp,'id'=>$request->id])->exists()) {
            $member = Member::find($request->id);
            $member->otp_status = 1;
            if ($member->save()) {
                $this->data['id'] = $member->id;
                $this->response['status'] = TRUE;
            } else {
                $this->response['status'] = FALSE;
                $this->response['message'] = 'Sorry, we have to face some technical issues please try again later.';     
            }
        } else {
            $this->response['status'] = FALSE;
            $this->response['message'] = 'Please enter correct OTP.';
        }
        return response($this->response, 200)->header('Content-Type', 'application/json');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        try {
            $decrypted = decrypt($request->segment(2));
        } catch (DecryptException $e) {
            
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
