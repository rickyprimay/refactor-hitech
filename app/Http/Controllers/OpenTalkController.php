<?php

namespace App\Http\Controllers;

use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Html\Column;
use App\Models\OpenTalk;
use Illuminate\Http\Request;
use Auth;
class OpenTalkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $openTalk = OpenTalk::where('user_id',Auth::user()->id)->first();
        if($openTalk){
            $openTalk = $openTalk->toArray();
        }
        return view('user.openTalk.index',compact('openTalk'));
    }
    
    public function indexAdmin(OpenTalk $dataTable)
    {
        $openTalkParticipant = DB::table('open_talks')
            ->select('open_talks.id as otId', 'open_talks.ticket_number as otTicketNumber', 'open_talks.user_id as otUserId', 'open_talks.payment_link as otPaymentLink', 'open_talks.approved_payment as otApprovedPayment' , 'open_talks.created_at as otCreatedAt', 'open_talks.updated_at as otUpdatedAt')
            // ->join('participants', 'participants.id', '=', 'open_talks.participant_id')
            ->get()
            ->paginate(10);
        return view('admin.openTalk.index', compact('openTalkParticipant'));
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
        $request->validate([
            'payment_link' => 'required',
        ]);
        $input = $request->all();

        OpenTalk::create(array_merge($input, ['user_id' => Auth::user()->id]));

        return redirect()->route('participant.detailTeam.index')
                        ->with('success','Data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OpenTalk  $openTalk
     * @return \Illuminate\Http\Response
     */
    public function show(OpenTalk $openTalk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OpenTalk  $openTalk
     * @return \Illuminate\Http\Response
     */
    public function edit(OpenTalk $openTalk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OpenTalk  $openTalk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OpenTalk $openTalk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OpenTalk  $openTalk
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpenTalk $openTalk)
    {
        //
    }
}
