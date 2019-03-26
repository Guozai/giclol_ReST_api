<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegistrationCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::all();
        return $registrations;
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
        $this->validate($request, [
            'team_name' => 'required|min:3|max:18',
            'contact_name' => 'required',
            'contact_number' => 'numeric|min:8|max:13',
            'member1_id' => 'required',
            'member2_id' => 'required',
            'member3_id' => 'required',
            'member4_id' => 'required',
            'member5_id' => 'required',
        ]);

        try {
            $allRequest = $request->all();
            $team = new Team();
            $team->team_name = $allRequest['team_name'];
            $saved_team = $team->save();

            $registration = new Registration();
            $registration->contact_name = $allRequest['contact_name'];
            $registration->contact_number = $allRequest['contact_number'];
            $registration->member1_id = $allRequest['member1_id'];
            $registration->member2_id = $allRequest['member2_id'];
            $registration->member3_id = $allRequest['member3_id'];
            $registration->member4_id = $allRequest['member4_id'];
            $registration->member5_id = $allRequest['member5_id'];
            if ($allRequest['member6_id'] != null) {
                $registration->member6_id = $allRequest['member6_id'];
            }
            if ($allRequest['member7_id'] != null) {
                $registration->member7_id = $allRequest['member7_id'];
            }
            if ($allRequest['icon'] != null) {
                $registration->icon = $allRequest['icon'];
            }
            $registration->team_id = $team->id;
            $saved_reg = $registration->save();

            if (!$saved_team || !$saved_reg) {
                return array("status" => "ERROR");
            }

            /*
             * Using sessions
             * */
            $request->session()->put('Registration', $registration->id);
            $request->session()->put('team_name', $registration->team->team_name);

            //return redirect()->route('registrationCRUD.index')->with('success', '保存成功');
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");
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
