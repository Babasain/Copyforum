<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use DB;
class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thread $thread)
    {
        //
    }
    
    public function insertquestion(Request $req){
        $title = $req->threadtitle;
        $desc = $req->threaddesc;
        $id = $req->cat_id;
        $user_id = $req->user;
        
        $obj = new Thread();
        $obj->thread_title = $title;
        $obj->thread_desc = $desc;
        $obj->thread_cat_id = $id;
        $obj->thread_user_id = $user_id;
        $obj->save();
        
        return redirect()->back()->with('message', 'Record has been inserted successfully');
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
