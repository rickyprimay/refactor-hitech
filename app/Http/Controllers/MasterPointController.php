<?php

namespace App\Http\Controllers;

use App\Models\MasterPoint;
use Illuminate\Http\Request;
use DB;
class MasterPointController extends Controller
{
    public function index()
    {
        $masterPoint = DB::table('master_points')
            ->select('master_points.id as mpId', 'master_points.name as mpName', 'master_points.point as mpPoint', 'participants.name as pName', 'participants.email as pEmail' , 'participants.phone as pPhone')
            ->join('participants', 'participants.id', '=', 'master_points.participant_id')
            ->paginate(10);
        return view('admin.masterPoint.index', compact('masterPoint'));
    }

    public function create()
    {
        $participant = DB::table('participants')
            ->select('participants.id as id', 'participants.name as name', 'detail_teams.name_team as name_team', 'detail_teams.link_project as link_project', 'detail_teams.approved_project as approved_project', 'detail_teams.payment_photo as payment_photo', 'detail_teams.approved_payment as approved_payment','detail_teams.type as dtType')
            ->join('detail_teams', 'detail_teams.participant_id', '=', 'participants.id')
            ->get();
        return view('admin.masterPoint.create', compact('participant'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'point' => 'required',
            'participant_id' => 'required',
        ]);
        $input = $request->all();



        MasterPoint::create($input);

        return redirect()->route('admin.masterPoint.index')
                        ->with('success','Data created successfully.');
    }

    public function show(MasterPoint $masterPoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterPoint  $masterPoint
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterPoint $masterPoint)
    {
        $participant = DB::table('participants')
            ->select('participants.id as id', 'participants.name as name', 'detail_teams.name_team as name_team', 'detail_teams.link_project as link_project', 'detail_teams.approved_project as approved_project', 'detail_teams.payment_photo as payment_photo', 'detail_teams.approved_payment as approved_payment','detail_teams.type as dtType')
            ->join('detail_teams', 'detail_teams.participant_id', '=', 'participants.id')
            ->get();
        return view('admin.masterPoint.edit', compact('masterPoint','participant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterPoint  $masterPoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterPoint $masterPoint)
    {
        $request->validate([
            'name' => 'required',
            'point' => 'required',
            'participant_id' => 'required',
        ]);
        $input = $request->all();

        $masterPoint->update($input);

        return redirect()->route('admin.masterPoint.index')
        ->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterPoint  $masterPoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterPoint $masterPoint)
    {
        //
    }
}
