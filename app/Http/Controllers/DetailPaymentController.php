<?php

namespace App\Http\Controllers;

use App\Models\DetailTeam;
use Illuminate\Http\Request;
use Auth;
class DetailPaymentController extends Controller
{
    public function index()
    {
        $detailPayment = DetailTeam::where('participant_id',Auth::user()->id)->first();
        if($detailPayment){
            $detailPayment = $detailPayment->toArray();
        }
        return view('participant.detailPayment.index',compact('detailPayment'));
    }

    public function update(Request $request, DetailTeam $detailPayment)
    {
        $request->validate([
            'payment_photo' => 'required',
        ]);
        $input = $request->all();

        $detailPayment->update($input);

        return redirect()->route('participant.detailPayment.index')
        ->with('success','Data updated successfully');
    }
}
