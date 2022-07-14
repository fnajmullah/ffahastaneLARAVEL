@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-command bg-blue"></i>
                    <div class="d-inline">
                        <h5>History</h5>
                        <span>Add History</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">History</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="col-lg-10">
        @if(Session::has('message'))
        <div class="alert bg-success alert-success text-white" role="alert">
            {{Session::get('message')}}
        </div>
        @endif

        <div class="card">
            <form class="forms-sample" action="{{route('histories.create.step.one.post')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="card-header">
                    <h3>Add Medical Condition</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Smoking</label>
                            <select class="form-control @error('smoking') is-invalid @enderror" name="smoking" value="{{old('smoking')}}">
                                <option value="">select</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            @error('smoking')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">alcohol</label>
                            <select class="form-control @error('alcohol') is-invalid @enderror" name="alcohol" value="{{old('alcohol')}}">
                                <option value="">select</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            @error('alcohol')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">diabetes</label>
                            <select class="form-control @error('diabetes') is-invalid @enderror" name="diabetes" value="{{old('diabetes')}}">
                                <option value="">select</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            @error('diabetes')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">hypertention</label>
                            <select class="form-control @error('hypertention') is-invalid @enderror" name="hypertention" value="{{old('hypertention')}}">
                                <option value="">select</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            @error('hypertention')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">headache</label>
                            <select class="form-control @error('headache') is-invalid @enderror" name="headache" value="{{old('headache')}}">
                                <option value="">select</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            @error('headache')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary mr-2">Save and Continue</button>
                    <button class="btn btn-light">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection