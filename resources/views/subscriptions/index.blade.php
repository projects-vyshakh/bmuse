@extends('templates.layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{$contentHeader}}</h5>
                </div>
                <div class="card-body">
                    @include('components.alerts.alert')
                    {!! Form::open(['route'=>'subscriptions/store', 'id'=>'validation-form123']) !!}
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="validation-name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="validation-email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn  btn-primary">Subscribe</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('custom-scripts')
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/custom/form-validation.js')}}"></script>
@endsection


