<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
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
    public function show()
    {
        $data = DB::table('categories')->get();
        return view('index',compact('data'));
        //dd($data);
        //
    }
     public function showcat($id){
       
        $data=DB::table('categories')->where('categorey_id',$id)->first();
        // $data2 = DB::table('threads')->where('thread_cat_id', $id)->get();
        // $uid = $data2->pluck('thread_user_id')->toArray(); // Use toArray() instead of get()
        // $data5 = DB::table('accounts')->select('username')->whereIn('sno', $uid)->get(); // Use 'whereIn' instead of 'where'
        $threds_list = DB::table('threads')
        ->join('accounts','accounts.sno','=','threads.thread_user_id')
        ->where('threads.thread_cat_id','=',$id)
        ->get();

        
        //dd($data5);
     
         return view('threadlist',compact('threds_list','data'));
     }
     public function threadquestion($id){
        $data3=DB::table('threads')->where('thread_id',$id)->get();
       // $data4=DB::table('comments')->where('thread_id',$id)->get();
        $comment_list = DB::table('comments')
        ->join('accounts','accounts.sno','=','comments.comment_by')
        ->where('comments.thread_id','=',$id)
        ->get();

        return view('thread',compact('data3','comment_list'));
        

     }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }
    
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
