<?php

namespace App\Http\Controllers;

use App\Models\DetailTeam;
use Illuminate\Http\Request;
use Auth;

class DetailProjectController extends Controller
{
    public function index()
    {
        $detailProject = DetailTeam::orWhere('participant_id',Auth::user()->id)->first();
        if($detailProject){
            $detailProject = $detailProject->toArray();
        }
        return view('participant.detailProject.index',compact('detailProject'));
    }

    public function update(Request $request, DetailTeam $detailProject)
    {
        $request->validate([
            'link_project' => 'required',
        ]);
        $input = $request->all();

        $detailProject->update($input,['approved_project' => NULL]);

        return redirect()->route('participant.detailProject.index')
        ->with('success','Data updated successfully');
    }
}
