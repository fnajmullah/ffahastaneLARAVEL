<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Prescription;
use App\Models\MedicalCondition;
use App\Models\Attachment;
use App\Models\Medication;
use App\Models\Operation;
use App\Models\User;
use App\Models\feedback;

class PrescriptionController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Europe/Istanbul');
        // $medicalconditions=MedicalCondition::where('user_id',auth()->user()->id);
        // $medications=Medication::where('user_id',auth()->user()->id);
        // $operations=Operation::where('user_id',auth()->user()->id);
        // $attachments=Attachment::where('user_id',auth()->user()->id);
        $bookings =  Booking::where('date', date('Y-m-d'))->where('status', 1)->where('doctor_id', auth()->user()->id)->get();
        // $user=User::where('id',auth()->user()->id);
        // dd($medicalconditions,$medications,$operations,$attachments);
        // return view('prescription.index', compact('bookings','attachments','operations','medications','medicalconditions','user'));
        return view('prescription.index', compact('bookings'));

    }


    public function store(Request $request)
    {
        $data  = $request->all();
        $data['medicine'] = implode(',', $request->medicine);
        Prescription::create($data);
        return redirect()->back()->with('message', 'Prescription created');
    }

    public function show($userId, $date)
    {
        $prescription = Prescription::where('user_id', $userId)->where('date', $date)->first();
        return view('prescription.show', compact('prescription'));
    }

    //get all patients from prescription table
    public function patientsFromPrescription()
    {
        $patients = Prescription::get();
        return view('prescription.all', compact('patients'));
    }
}
