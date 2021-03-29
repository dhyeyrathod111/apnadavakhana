<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Member;
use App\MemberDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    protected $data = array();protected $response = array();

    public function __construct() {
        $this->middleware('guestadmin', ['except' => ['loginform','adminregistrationform','registrationprocess','loginprocess']]);
    }

    
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
        $this->data['states'] = \App\State::all();
        return view('admin.createnewmember',$this->data);
    }
    public function datatable_memberlist(Request $request)
    {
        $members_qeury = Member::join('member_details','members.id','=','member_details.member_id');
        $members_qeury->orderBy('members.created_at','DESC')->offset($request->start)->limit($request->length);

        $membersdata = $members_qeury->get();

        $memberscount = $membersdata->count();$membersdata_array = array();
        foreach ($membersdata as $key => $onemember) :  
            $temp_array = array();
            $temp_array[] = $onemember->otp;
            $temp_array[] = $onemember->memberdetail->first_name." ".$onemember->memberdetail->last_name ;
            $temp_array[] = $onemember->contact_no ;
            $temp_array[] = $onemember->memberdetail->email_id;
            $temp_array[] = $onemember->created_at->format('d/m/Y');
            $temp_array[] = '<a href="'.\URL::to('member/'.encrypt($onemember->id)).'" class="btn btn-primary">View</a>';
            $temp_array[] = '<button type="button" class="btn btn-primary">Edit</button>';
            array_push($membersdata_array,$temp_array);
        endforeach ;
        $dataTable_response = [
            "draw" => intval($request->draw),
            "recordsTotal" => $membersdata,
            "recordsFiltered"=> $memberscount,
            "data"=> $membersdata_array
        ];
        echo json_encode($dataTable_response);
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
        $member->contact_no = $request->mobile_no;
        $member->steps = 1;
        $member->otp = rand(10000,99999);
        if ($member->save()) {
            $menberinfo = new MemberDetail;
            $menberinfo->member_id  = $member->id;
            $menberinfo->first_name  = $request->first_name;
            $menberinfo->last_name  = $request->last_name;
            $menberinfo->email_id  = $request->email_id;
            $menberinfo->type  = $request->type;
            $menberinfo->salutation  = $request->salutation;
            $menberinfo->date_of_birth  = $request->date_of_birth;
            $menberinfo->gender  = $request->gender;
            $menberinfo->occupation  = $request->occupation;
            $menberinfo->address  = $request->address;
            $menberinfo->road_area  = $request->road_area;
            $menberinfo->state  = $request->state;
            $menberinfo->city_district  = $request->city_district;
            $menberinfo->pincode  = $request->pincode;
            $menberinfo->member_image  = \Storage::putFile('member_image', $request->file('member_image'));
            if ($menberinfo->save()) {
                $this->response['status'] = TRUE;
                $this->response['message'] = 'Member has been created successfully.';
                $this->response['redirect_url'] = route('memberarea');
            } else {
                $this->response['status'] = FALSE;
                $this->response['message'] = 'Sorry, we have to face some technical issues please try again later.';
            }
        } else {
            $this->response['status'] = FALSE;
            $this->response['message'] = 'Please enter correct contact number.';
        }
        return response($this->response, 200)->header('Content-Type', 'application/json');
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
    public function memberarea(Request $request)
    {
        return view('admin.memberarea');
    }



























    public function loginform(Request $request)
    {
        if ($request->session()->has('admin_id')) return redirect(url('admin'));
        return view('admin.login');
    }
    public function adminregistrationform(Request $request)
    {
        if ($request->session()->has('admin_id')) return redirect(url('admin'));
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
                $this->response['redirect_url'] = route('adminlogin'); 
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
                $request->session()->put('admin_id',$admininfo->id);$request->session()->put('admin_name',$admininfo->name);
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
    public function adminlogout(Request $request)
    {
        $request->session()->flush();return redirect(route('adminlogin'));
    }
}
