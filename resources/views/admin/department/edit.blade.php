@extends('admin.layout.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Department</h5>
                    <span>Update department</span>
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
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row ">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <h3>Add Department</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{route('department.update',[$department->id])}}" method="post">@csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">

                                <label for="">Department name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="department name" value="{{$department->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">

                                    <label for="">Department adi</label>
                                    <input type="text" name="tr_name" class="form-control @error('tr_name') is-invalid @enderror" placeholder="clinik ad" value="{{$department->tr_name}}">
                                    @error('tr_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection