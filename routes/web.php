<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('homepage');
Route::get('/appointmentbydepartment', 'App\Http\Controllers\FrontendController@babydepartment')->name('w');
Route::get('/appointmentbydoctor', 'App\Http\Controllers\FrontendController@babydoctor')->name('bookappointmentbydoctor');
Route::get('/appointmentbylocation', 'App\Http\Controllers\FrontendController@babylocation')->name('bookappointmentbylocation');
Route::get('/appointmentbydepartment', 'App\Http\Controllers\FrontendController@babydepartment')->name('bookappointmentbydepartment');
Route::get('/new-appointment/{doctorId}/{date}', 'App\Http\Controllers\FrontendController@show')->name('create.appointment');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);


// Route::get('/foundation', 'App\Http\Controllers\FrontendController@foundation')->name('foundation');
// Route::get('/foundation', 'App\Http\Controllers\FrontendController@foundation')->name('foundation');
// Route::get('/foundation', 'App\Http\Controllers\FrontendController@foundation')->name('foundation');
Route::get('/producta', 'App\Http\Controllers\FrontendController@producta')->name('producta');
Route::get('/transportation', 'App\Http\Controllers\FrontendController@transportation')->name('transportation');
Route::get('/solutiona', 'App\Http\Controllers\FrontendController@solutiona')->name('solutiona');

Route::get('/foundation', 'App\Http\Controllers\FrontendController@foundation')->name('foundation');
Route::get('/collaboration', 'App\Http\Controllers\FrontendController@collaboration')->name('collaboration');
Route::get('/mission', 'App\Http\Controllers\FrontendController@mission')->name('mission');
Route::get('/aim', 'App\Http\Controllers\FrontendController@aim')->name('aim');

// Route::get('/cfeedback', 'App\Http\Controllers\FeedBackController@create')->name('feedback');

Route::get('/investment', 'App\Http\Controllers\FrontendController@investment')->name('investment');
Route::get('/franchising', 'App\Http\Controllers\FrontendController@franchising')->name('franchising');
Route::get('/career', 'App\Http\Controllers\FrontendController@career')->name('career');
Route::get('/privacypolicy', 'App\Http\Controllers\FrontendController@privacypolicy')->name('privacypolicy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('cfeedback', 'App\Http\Controllers\FeedBackController@index')->name('feedback.index');
    Route::get('feedback/{id}/edit', 'App\Http\Controllers\FeedBackController@edit')->name('feedback.edit');
    Route::get('feedback/{id}', 'App\Http\Controllers\FeedBackController@destroy')->name('feedback.destroy');

    Route::resource('hekim', 'App\Http\Controllers\DoctorController');
    Route::get('/patients', 'App\Http\Controllers\PatientlistController@index')->name('patients');
    Route::get('/patients/all', 'App\Http\Controllers\PatientlistController@allTimeAppointment')->name('all.appointments');
    Route::get('/status/update/{id}', 'App\Http\Controllers\PatientlistController@toggleStatus')->name('update.status');
    Route::resource('department', 'App\Http\Controllers\DepartmentController');
});

Route::group(['middleware' => ['auth', 'doctor']], function () {
    Route::resource('appointment', 'App\Http\Controllers\AppointmentController');
    Route::post('/appointment/check', 'App\Http\Controllers\AppointmentController@check')->name('appointment.check');
    Route::post('/appointment/update', 'App\Http\Controllers\AppointmentController@updateTime')->name('update');
    Route::get('patient-today', 'App\Http\Controllers\PrescriptionController@index')->name('patients.today');
    Route::post('/prescription', 'App\Http\Controllers\PrescriptionController@store')->name('prescription');
    Route::get('/prescription/{userId}/{date}', 'App\Http\Controllers\PrescriptionController@show')->name('prescription.show');
    Route::get('/prescribed-patients', 'App\Http\Controllers\PrescriptionController@patientsFromPrescription')->name('prescribed.patients');
});

Route::group(['middleware' => ['auth', 'patient']], function () {
    // Route::resource('feedback', 'App\Http\Controllers\FeedBackController');
    // Route::get('/feedback/create', 'App\Http\Controllers\FeedBackController@create')->name('feedback.create');
    Route::get('/feedback', 'App\Http\Controllers\FeedBackController@create')->name('feedback');
    Route::post('/feedback', 'App\Http\Controllers\FeedBackController@store')->name('feedback.store');

    Route::post('/book/appointment', 'App\Http\Controllers\FrontendController@store')->name('booking.appointment')->middleware('auth');
    Route::get('/my-booking', 'App\Http\Controllers\FrontendController@myBookings')->name('my.booking')->middleware('auth');
    Route::get('/user-profile', 'App\Http\Controllers\ProfileController@index');
    Route::post('/user-profile', 'App\Http\Controllers\ProfileController@store')->name('profile.store');
    Route::post('/profile-pic', 'App\Http\Controllers\ProfileController@profilePic')->name('profile.pic');
    // Route::resource('patienthistory', 'App\Http\Controllers\PatienthistoryController');


    Route::get('histories', 'App\Http\Controllers\PatienthistoryController@index')->name('histories.index');
    Route::get('histories/create-step-one', 'App\Http\Controllers\PatienthistoryController@createStepOne')->name('histories.create.step.one');
    Route::get('histories/create-step-one/{id}', 'App\Http\Controllers\PatienthistoryController@deleteStepOne')->name('histories.delete.step.one');
    Route::post('histories/create-step-one', 'App\Http\Controllers\PatienthistoryController@postCreateStepOne')->name('histories.create.step.one.post');
    Route::get('histories/create-step-two', 'App\Http\Controllers\PatienthistoryController@createStepTwo')->name('histories.create.step.two');
    Route::get('histories/create-step-two/{id}', 'App\Http\Controllers\PatienthistoryController@deleteStepTwo')->name('histories.delete.step.two');
    Route::post('histories/create-step-two', 'App\Http\Controllers\PatienthistoryController@postCreateStepTwo')->name('histories.create.step.two.post');
    Route::get('histories/create-step-three', 'App\Http\Controllers\PatienthistoryController@createStepThree')->name('histories.create.step.three');
    Route::get('histories/create-step-three/{id}', 'App\Http\Controllers\PatienthistoryController@deleteStepThree')->name('histories.delete.step.three');
    Route::post('histories/create-step-three', 'App\Http\Controllers\PatienthistoryController@postCreateStepThree')->name('histories.create.step.three.post');
    Route::get('histories/create-step-four', 'App\Http\Controllers\PatienthistoryController@createStepFour')->name('histories.create.step.four');
    Route::get('histories/create-step-four/{id}', 'App\Http\Controllers\PatienthistoryController@deleteStepFour')->name('histories.delete.step.four');
    Route::post('histories/create-step-four', 'App\Http\Controllers\PatienthistoryController@postCreateStepFour')->name('histories.create.step.four.post');


    // Route::get('/patienthistory/create','App\Http\Controllers\PatienthistoryController@create')->name('patienthistory.create');
    // Route::post('/patienthistory/store','App\Http\Controllers\PatienthistoryController@store')->name('patienthistory.store');
});

Route::get('/event', 'EventCalender@index');
Route::get('/my-prescription', 'App\Http\Controllers\FrontendController@myPrescription')->name('my.prescription');


// Route::group(['middleware' => ['auth', 'admin','patient']], function () {
// Route::resource('patienthistory','App\Http\Controllers\PatienthistoryController');
// });

// Route::post('/api/doctors','App\Http\Controllers\FrontendController@getDoctors');
Route::get('/api/doctors/today', 'App\Http\Controllers\FrontendController@doctorToday');
Route::post('/api/finddoctors', 'App\Http\Controllers\FrontendController@findDoctors');
Route::get('/api/finddoctorsdepartment', 'App\Http\Controllers\FrontendController@findDoctorsDepartment');
Route::get('/api/finddoctorslocation', 'App\Http\Controllers\FrontendController@findDoctorsLocation');
Route::get('/api/finddoctorsname', 'App\Http\Controllers\FrontendController@findDoctorsName');
Route::get('/seepatienthistory/{id}', 'App\Http\Controllers\FrontendController@seePatientHistory')->name('see.patienthistory');
