@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        @if(Session::has('message'))
        <div class="alert bg-success alert-success text-white" role="alert">
            {{Session::get('message')}}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Add Feedback</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{route('feedback.store')}}" method="post">@csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Subject</label>
                            <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" value="{{old('subject')}}">
                            @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="exampleTextarea1" rows="4" name="description">
                            {{old('description')}}

                            </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection