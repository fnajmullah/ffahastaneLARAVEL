<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;
use App\Models\User;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users  = User::where('role_id', '=',auth()->user()->id )->get();
        $feedbacks=Feedback::get();
        return view('admin.feedback.index', compact('users','feedbacks'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cfeedback');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateStore($request);
        $feedback = Feedback::create([
            'user_id' => auth()->user()->id,
            'subject' => $request->subject,
            'description' => $request->description
        ]);

        return redirect()->back()->with('message', 'Feedback added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        // return 'adsf';
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect()->route('feedback.index')->with('message', 'Complain deleted successfully');
    }

    public function validateStore($request)
    {
        return  $this->validate($request, [
            'name' => 'required' . \Auth::id(),
            'description' => 'required'

        ]);
    }
    public function validateUpdate($request, $id)
    {
        return  $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
    }
}
