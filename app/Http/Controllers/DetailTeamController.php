<?php

namespace App\Http\Controllers;

use App\Models\DetailTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class DetailTeamController extends Controller
{
    public function index()
    {
        $detailTeam = DetailTeam::where('participant_id',Auth::user()->id)->first();
        if($detailTeam){
            $detailTeam = $detailTeam->toArray();
        }
        return view('participant.detailTeam.index',compact('detailTeam'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'type' => 'required',
        //     'name_team' => 'required',
        //     'name_app' => 'required',
        //     'institution' => 'required',
        //     'email' => 'required',
        //     'name_member1' => 'required',
        //     'phone_member1' => 'required',
        //     'name_member2' => '',
        //     'phone_member2' => '',
        // ]);
        // $input = $request->all();



        // DetailTeam::create(array_merge($input, ['participant_id' => Auth::user()->id]));

        return back()->with('error','Waktu Pendaftaran telah usai.');
    }
    public function update(Request $request, DetailTeam $detailTeam)
    {
        $request->validate([
            'type' => 'required',
            'name_team' => 'required',
            'name_app' => 'required',
            'institution' => 'required',
            'email' => 'required',
            'name_member1' => 'required',
            'phone_member1' => 'required',
            'name_member2' => '',
            'phone_member2' => '',
        ]);
        $input = $request->all();

        $detailTeam->update($input);

        return redirect()->route('participant.detailTeam.index')
        ->with('success','Data updated successfully');
    }

    public function show($id)
    {
        $participant = DB::table('participants')
            ->select(
                'participants.id as pId',
                'participants.name as pName',
                'participants.email as pEmail',
                'participants.phone as pPhone',
                'detail_teams.type as dtType',
                'detail_teams.name_team as dtName_team',
                'detail_teams.name_app as dtName_app',
                'detail_teams.institution as dtInstitution',
                'detail_teams.email as dtEmail',
                'detail_teams.name_member1 as dtName_member1',
                'detail_teams.phone_member1 as dtPhone_member1',
                'detail_teams.name_member2 as dtPhone_member2',
                'detail_teams.link_project as dtLink_project',
                'detail_teams.approved_project as dtApproved_project',
                'detail_teams.payment_photo as dtPayment_photo',
                'detail_teams.approved_payment as dtApproved_payment'
            )
            ->join('detail_teams', 'detail_teams.participant_id', '=', 'participants.id')
            ->where('participants.id', $id)->first();
        return view('participant.detailTeam.detail', compact('participant'));
    }


}
