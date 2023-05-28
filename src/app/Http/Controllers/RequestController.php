<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    //
    public function addRequest(Request $request)
    {
        $user_id = auth()->user()->id;
        $budget = $request->input('budget');
        $title = $request->input('title');
        $description = $request->input('description');
        $details = new Details;
        $details->budget = $budget;
        $details->title = $title;
        $details->description = $description;
        $details->user_id = $user_id;
        $details->save();
        return redirect()->to('/adddetails');
    }


    function viewDetails()
    {
        $user_id = auth()->user()->id;
        $selectedDetail = DB::table('details')->where('user_id', '=', $user_id)->get();
        // print_r($selectedDetail);
        return view('/myprofile', ['details' => $selectedDetail]);
    }

    public function updateRequest(Request $request, $id)
    {
        $detail = Details::find($id);
        $detail->budget = $request->input('budget');
        $detail->title = $request->input('title');
        $detail->description = $request->input('description');
        $detail->save();
        return redirect('/myprofile');
    }

    public function showCurrentRequest($id)
    {
        $detail = Details::find($id);
        return view('/updateDetail/detail', ['detail' => $detail]);
    }


    public function deleteRequest($id)
    {
        DB::table('detail')->where('id', '=', $id)->delete();
        return redirect('/myprofile');
    }
}
