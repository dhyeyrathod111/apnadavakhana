<?php

namespace App\Http\Controllers;

use App\MemberDetail;
use Illuminate\Http\Request;

class MemberDetailController extends Controller
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
        if (MemberDetail::where(['member_id'=>$request->member_id])->exists()) {
            $menberinfo = MemberDetail::where(['member_id'=>$request->member_id])->first();
        } else {
            $menberinfo = new MemberDetail;
        }
        $menberinfo->member_id = $request->member_id;
        $menberinfo->first_name = $request->first_name;
        $menberinfo->last_name = $request->last_name;
        $menberinfo->registration_type = $request->registration_type;
        $menberinfo->title = $request->title;
        $menberinfo->dob = $request->dob;
        $menberinfo->gender = $request->gender;
        $menberinfo->member_id = $request->member_id;
        if ($menberinfo->save()) {
            $this->response['status'] = TRUE;
            $this->response['member_id'] = $request->member_id;
        } else {
            $this->response['status'] = FALSE;
            $this->response['message'] = 'Sorry, we have to face some technical issues please try again later.';
        }   
        return response($this->response, 200)->header('Content-Type', 'application/json');
    }
    public function load_persnalinformation(Request $request)
    {
        if (MemberDetail::where(['member_id'=>$request->member_id])->exists()) {
            $this->data['memberdetails'] = MemberDetail::where('member_id',$request->member_id)->first();
            $this->response['status'] = TRUE;
            $this->response['html_str'] = \View::make('website.modal.persnalinfo',$this->data)->render();
        } else {
            $this->response['status'] = FALSE;
            $this->response['message'] = 'Sorry, we have to face some technical issues please try again later.';
        }
        return response($this->response, 200)->header('Content-Type', 'application/json');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\MemberDetail  $memberDetail
     * @return \Illuminate\Http\Response
     */
    public function show(MemberDetail $memberDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MemberDetail  $memberDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberDetail $memberDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MemberDetail  $memberDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemberDetail $memberDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MemberDetail  $memberDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberDetail $memberDetail)
    {
        //
    }
}
