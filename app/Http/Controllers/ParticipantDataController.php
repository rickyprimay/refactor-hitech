<?php

namespace App\Http\Controllers;

use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Html\Column;
use Illuminate\Http\Request;
use App\Models\Participant;
use Auth;
use Illuminate\Support\Facades\DB;

class ParticipantDataController extends Controller
{

    public function index(Participant $dataTable)
    {
        $participant = DB::table('participants')
            ->select('participants.id as id', 'participants.name as name', 'detail_teams.name_team as name_team', 'detail_teams.link_project as link_project', 'detail_teams.approved_project as approved_project', 'detail_teams.payment_photo as payment_photo', 'detail_teams.approved_payment as approved_payment','detail_teams.type as dtType')
            ->join('detail_teams', 'detail_teams.participant_id', '=', 'participants.id')
            ->paginate(10);
        return view('admin.participant.index', compact('participant'));
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
    public function paymentValidate()
    {
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        return view('admin.participant.detail', compact('participant'));
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

    public function approveProject(Request $request)
    {

    }
}
