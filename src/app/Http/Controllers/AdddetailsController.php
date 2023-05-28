<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdddetailsController extends Controller
{
    public function adddetails(Request $request){
        $budget = $request->input('budget');
        $title = $request->input('title');
        $description = $request->input('description');
       
        DB::unprepared("insert into adddetails (budget, title, description) values ('$budget','$title','$description')");
        return redirect('/');
    }

    function viewDetails() {
        
        $adddetail = DB::select('select * from adddetails');        
        return view('myprofile', ["adddetail"=>$adddetail]);
    
    }

    function updateDetails(Request $request, $id) {

        $budget = $request->input('budget');
        $title = $request->input('title');
        $description = $request->input('description');

       

        date_default_timezone_set("Asia/Karachi");
        $dt = date("Y-m-d H:i:s");

        DB::update('update details set weight=?, public=?, updatedtime=? where id= ?', [$fishweight, $decision, $dt ,$id]);
        return redirect('home');
    }



}
