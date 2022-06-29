@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h5>Product A</h5> -->
                    <div class="row justify-content-center">
                            <h3>{{__('messages.producta.title')}}</h3>
                        </div>
                </div>
                <div class="card-body">
                    <p>{{__('messages.producta.description.p1')}}</p>
                    <p>{{__('messages.producta.description.p2')}}</p>
                    <p>{{__('messages.producta.description.p3')}}</p>
                    <p>{{__('messages.producta.description.p4')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection