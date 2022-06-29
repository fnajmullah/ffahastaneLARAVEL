@extends('admin.layout.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Department</h5>
                    <span>add department</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Department</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-10">
        @if(Session::has('message'))
        <div class="alert bg-success alert-success text-white" role="alert">
            {{Session::get('message')}}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Add Department</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{route('department.store')}}" method="post">@csrf
                    <div class="row">
                        <div class="col">
                            <label for="">Department name</label>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Department name" value="{{old('name')}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </div>

                    </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection