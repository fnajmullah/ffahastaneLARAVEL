<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Time;
use App\Models\User;
use App\Models\Booking;
use App\Models\Prescription;
use App\Mail\AppointmentMail;
use App\Models\Attachment;
use App\Models\Department;
use App\Models\Operation;
use App\Models\Medication;
use App\Models\Medicalcondition;

class FrontendController extends Controller
{

    public function index()
    {
        date_default_timezone_set('Europe/Istanbul');
        if (request('date')) {
            $doctors = $this->findDoctorsBasedOnDate(request('date'));
            return view('welcome', compact('doctors'));
        }
        $doctors = Appointment::where('date', date('Y-m-d'))->get();
        return view('welcome', compact('doctors'));
    }
    

    public function babydoctor()
    {
        date_default_timezone_set('Europe/Istanbul');
        if (request('name')) {
            $doctors = $this->findDoctorsBasedOnName(request('name'));
            return view('welcomebydoctor', compact('doctors'));
        }
        $doctors = Appointment::where('date', date('Y-m-d'))->get();
        return view('welcomebydoctor', compact('doctors'));
    }

    public function babydepartment()
    {
        date_default_timezone_set('Europe/Istanbul');
        if (request('speciality')) {
            $doctors = $this->findDoctorsBasedOnLocation(request('speciality'));
            return view('welcomebydepartment', compact('doctors'));
        }
        $doctors = Appointment::where('date', date('Y-m-d'))->get();
        return view('welcomebydepartment', compact('doctors'));
    }

    public function babylocation()
    {
        date_default_timezone_set('Europe/Istanbul');
        if (request('date')) {
            $doctors = $this->findDoctorsBasedOnDate(request('date'));
            return view('welcomebylocation', compact('doctors'));
        }
        $doctors = Appointment::where('date', date('Y-m-d'))->get();
        return view('welcomebylocation', compact('doctors'));
    }

    public function show($doctorId, $date)
    {
        $appointment = Appointment::where('user_id', $doctorId)->where('date', $date)->first();
        $times = Time::where('appointment_id', $appointment->id)->where('status', 0)->get();
        $user = User::where('id', $doctorId)->first();
        $doctor_id = $doctorId;
        return view('appointment', compact('times', 'date', 'user', 'doctor_id'));
    }

    public function findDoctorsBasedOnDate($date)
    {
        $doctors = Appointment::where('date', $date)->get();
        return $doctors;
    }

    public function findDoctorsBasedOnName($name)
    {
        $doctors = Appointment::where('name', $name)->get();
        return $doctors;
    }
    public function findDoctorsBasedOnLocation($address)
    {
        $doctors = Appointment::where('address', $address)->get();
        return $doctors;
    }
    public function findDoctorsBasedOnDepartment($speciality)
    {
        $doctors = Appointment::where('speciality', $speciality)->get();
        return $doctors;
    }

    public function store(Request $request)
    {
        date_default_timezone_set('Europe/Istanbul');
        $request->validate(['time' => 'required']);
        $check = $this->checkBookingTimeInterval();
        if ($check) {
            return redirect()->back()->with('message', 'You have already bookedn an appointment.Please wait to make next appointment');
        }

        Booking::create([
            'user_id' => auth()->user()->id,
            'doctor_id' => $request->doctorId,
            'time' => $request->time,
            'date' => $request->date,
            'status' => 0
        ]);

        Time::where('appointment_id', $request->appointmentId)
            ->where('time', $request->time)
            ->update(['status' => 1]);
        //send email notification
        $doctorName = User::where('id', $request->doctorId)->first();
        $mailData = [
            'name' => auth()->user()->name,
            'time' => $request->time,
            'date' => $request->date,
            'doctorName' => $doctorName->name

        ];
        try {
            // Mail::to(auth()->user()->email)->send(new AppointmentMail($mailData));
        } catch (\Exception $e) {
        }

        return redirect()->back()->with('message', 'Your appointment was booked');
    }

    public function checkBookingTimeInterval()
    {
        return Booking::orderby('id', 'desc')
            ->where('user_id', auth()->user()->id)
            ->whereDate('created_at', date('Y-m-d'))
            ->exists();
    }

    public function myBookings()
    {
        $appointments = Booking::latest()->where('user_id', auth()->user()->id)->get();
        return view('booking.index', compact('appointments'));
    }

    public function myPrescription()
    {
        $prescriptions = Prescription::where('user_id', auth()->user()->id)->get();
        return view('my-prescription', compact('prescriptions'));
    }

    public function doctorToday(Request $request)
    {
        $doctors = Appointment::with('doctor')->whereDate('date', date('Y-m-d'))->get();
        return $doctors;
    }

    public function findDoctors(Request $request)
    {
        $doctors = Appointment::with('doctor')->whereDate('date', $request->date)->get();
        return $doctors;
    }

    public function seePatientHistory($id)
    {
        $user = User::find($id);
        $medications = Medication::where('user_id', $id)->get();
        $medicalconditions = Medicalcondition::where('user_id', $id)->get();
        $operations = Operation::where('user_id', $id)->get();
        $attachments = Attachment::where('user_id', $id)->get();
        return view('admin.history.seeindex', compact('user', 'medications', 'medicalconditions', 'operations', 'attachments'));
    }
    public function findDoctorsDepartment(Request $request)
    {
        $departments = Department::get();
        return $departments;
    }
    public function findDoctorsLocation(Request $request)
    {
        $doctors = User::where('role_id', '2')->get();
        return $doctors;
    }
    public function findDoctorsName(Request $request)
    {
        $doctors = User::where('role_id', '2')->get();
        return $doctors;
    }

    public function foundation()
    {
        return view('frontend.foundation');
    }
    public function collaboration()
    {
        return view('frontend.collaboration');
    }
    public function mission()
    {
        return view('frontend.mission');
    }
    public function aim()
    {
        return view('frontend.aim');
    }
    public function producta()
    {
        return view('frontend.producta');
    }
    public function solutiona()
    {
        return view('frontend.solutiona');
    }
    public function transportation()
    {
        return view('frontend.transportation');
    }
    public function investment()
    {
        return view('frontend.investment');
    }

    public function franchising()
    {
        return view('frontend.franchising');
    }
    public function career()
    {
        return view('frontend.career');
    }
    
    public function privacypolicy()
    {
        return view('frontend.privacypolicy');
    }
    



}
