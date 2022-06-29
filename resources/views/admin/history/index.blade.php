@extends('layouts.app')

@section('content')
<div class="container">
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Patient History</h5>
                    <span>list of all history</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">History</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Patient</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        @if(Session::has('message'))
        <div class="alert bg-success alert-success text-white" role="alert">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Medical Condition</h3>
            </div>
            <div class="card-body">
                <table  class="table">
                    <thead>
                        <tr>
                            <th>Smoking</th>
                            <th>Alchol</th>
                            <th>Diabets</th>
                            <th>HyperTention</th>
                            <th>Headache</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(count($medicalconditions)>0)
                        @foreach($medicalconditions as $medcon)
                        <tr>

                            <td>
                                @if($medcon->smoking==0)
                                <span>No</span>
                                @else
                                <span>Yes</span>
                                @endif
                                <!-- {{$medcon->smoking}} -->
                            </td>
                            <td>
                            @if($medcon->alkol==0)
                                <span>No</span>
                                @else
                                <span>Yes</span>
                                @endif
                                <!-- {{$medcon->alkol}} -->
                            </td>
                            <td>
                              @if($medcon->diabetes==0)
                                <span>No</span>
                                @else
                                <span>Yes</span>
                                @endif    
                            <!-- {{$medcon->diabetes}} -->
                        </td>
                            <td>
                              @if($medcon->hypertension==0)
                                <span>No</span>
                                @else
                                <span>Yes</span>
                                @endif    
                            <!-- {{$medcon->hypertension}} -->
                        </td>
                            <td>
                              @if($medcon->headache==0)
                                <span>No</span>
                                @else
                                <span>Yes</span>
                                @endif    
                            <!-- {{$medcon->headache}} -->
                        </td>
                        </tr>
                        @endforeach
                        @else
                        <td>No medical condition to display</td>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Medication used</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>medication</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($medications)>0)
                        @foreach($medications as $medication)
                        <tr>
                            <td>{{$medication->name}}</td>
                        </tr>
                        @endforeach
                        @else
                        <td>No medication to display</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>Past Operations</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Operation Name</th>
                            <th>Operation Description</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(count($operations)>0)
                        @foreach($operations as $operation)
                        <tr>
                            <td>{{$operation->name}}</td>
                            <td>{{$operation->description}}</td>
                        </tr>
                        @endforeach
                        @else
                        <td>No operations to display</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Patient History Document Images</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Attachment Title</th>
                            <th class="nosort">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($attachments)>0)
                        @foreach($attachments as $att)
                        <tr>
                            <td>{{$att->name}}</td>
                            <td><img src="{{asset('images/patienthistory')}}/{{$att->image}}" class="table-user-thumb" alt=""></td>
                        </tr>
                        @endforeach
                        @else
                        <td>No attachments to display</td>
                        @endif
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>
<div>
        <a href="{{route('patienthistory.edit',[$user->id])}}"><i class="ik ik-edit-2"></i>EditsdfgsdfgdsfgNO</a>
        <a href="{{route('patienthistory.destroy',[$user->id])}}"><i class="ik ik-trash-2"></i>Destroyasdfasdfasdfasdf</a>
</div>
</div>
@endsection