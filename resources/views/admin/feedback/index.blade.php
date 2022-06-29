@extends('admin.layout.master')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if(Session::has('message'))
        <div class="alert bg-success alert-success text-white" role="alert">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Data Table</h3>

            </div>
            <div class="card-body">
                <table id="data_table" class="table">
                    <thead>
                        <tr>
                            <th>User email</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th class="nosort">&nbsp;</th>
                            <th class="nosort">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($feedbacks)>0)
                        @foreach($feedbacks as $feedback)
                        <tr>
                        <td>{{$feedback->user->email}}</td>
                            <td>{{$feedback->subject}}</td>
                            <td>{{$feedback->description}}</td>
                            <td> 
                                <div class="table-actions">
                                    <!-- <a href="{{route('feedback.edit',[$feedback->id])}}"><i class="ik ik-edit-2"></i></a> -->
                                    
                                    <a href="{{route('feedback.destroy',[$feedback->id])}}"><i class="ik ik-trash-2"></i></a>
                                </div>
                            </td>
                            <td>x</td>
                        </tr>
                        @endforeach
                        @else
                        <td>No Feedbacks to display</td>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection