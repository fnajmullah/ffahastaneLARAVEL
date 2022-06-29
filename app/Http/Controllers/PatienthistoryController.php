<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attachment;
use App\Models\Operation;
use App\Models\Medication;
use App\Models\Medicalcondition;


class PatienthistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               
        // $myuser=User::where('id', auth()->user()->id)->get();
        // $id=$myuser->id()->get();
        // dd($id);
        // $id=auth()->user()->id;
        $medications = Medication::where('user_id', auth()->user()->id)->get();
        $medicalconditions = Medicalcondition::where('user_id', auth()->user()->id)->get();
        $operations = Operation::where('user_id', auth()->user()->id)->get();
        $attachments = Attachment::where('user_id',auth()->user()->id)->get();
        $user=User::find(auth()->user()->id);
        // dd($attachments);
        return view('admin.history.index',compact('user','medications','medicalconditions','operations','attachments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.history.create');
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
        $medicalcondition = Medicalcondition::create([
            'smoking' => $request->smoking,
            'alkol' => $request->alcohol,
            'hypertension' => $request->hypertention,
            'diabetes' => $request->diabetes,
            'headache' => $request->headache,
            'user_id' => auth()->user()->id
        ]);
        $meditation = Medication::create([
            'name' => $request->meditation,
            'user_id' => auth()->user()->id
        ]);
        $operation = Operation::create([
            'name' => $request->oname,
            'description' => $request->odescription,
            'user_id' => auth()->user()->id
        ]);

        $aimage=$request->file('aimage');
        $name=$aimage->hashName();
        $destination=public_path('/images/patienthistory');
        $aimage->move($destination,$name);
        
        $operation = Attachment::create([
            'name' => $request->aname,
            'image'=> $name,
            'user_id' => auth()->user()->id
        ]);        
            return redirect()->back()->with('message', 'Patient history added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $user=User::find(auth()->user()->id);
        $medications = Medication::where('user_id', $id)->get();
        $medicalconditions = Medicalcondition::where('user_id', $id)->get();
        $operations = Operation::where('user_id', $id)->get();
        $attachments = Attachment::where('user_id',$id)->get();
        // dd($attachments);
        return view('admin.history.index',compact('user','medications','medicalconditions','operations','attachments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
        $medication = Medication::where('user_id', $id)->delete();
        $medicalcondition = Medicalcondition::where('user_id', $id)->delete();
        $operation = Operation::where('user_id', $id)->delete();
        $attachment = Attachment::where('user_id',$id)->delete();

        if ($attachment) {
            unlink(public_path('images/patienthistory/' . $attachment->image));
        }
        return redirect()->route('patienthistory.index')->with('message', 'History deleted successfully');
    }

    public function validateStore($request)
    {
        // dd($request);
        return  $this->validate($request, [
            'smoking' => 'required',
            'alcohol' => 'required',
            'hypertention' => 'required',
            'diabetes' => 'required',
            'headache' => 'required',
            'meditation' => 'required',
            'oname' => 'required',
            'odescription' => 'required',
            'aname' => 'required',
            'aimage' => 'required|mimes:jpeg,jpg,png,pdf',
        ]);
    }

}
