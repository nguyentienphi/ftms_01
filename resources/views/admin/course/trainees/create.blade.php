@extends('layouts.default_admin')
@section('title', trans('message.add_trainee_to_course'))
@section('content')
    <div class="box box-warning create-box" >
        <div class="box-header with-border course-title">
            <h3 class="box-title">@lang('message.add_trainee_to_course')</h3>
        </div>
        @if(session()->has(trans('message.success')))
            <div class="alert alert-success">
                {{ session(trans('message.success')) }}
            </div>
        @elseif(session()->has(trans('message.fails')))
             <div class="alert alert-success">
                {{ session(trans('message.fails')) }}
            </div>
        @endif
        <div class="box-body course-box">
            {{ Form::open(['route' => 'trainee.stores']) }}
                <div class="form-group">
                    {{ Form::label(trans('message.name')) }}
                    {{ Form::select('user_id', $user->pluck('name', 'id'), null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label(trans('message.name_course')) }}
                    {{ Form::select('course_id', $course->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'course_id']) }}
                </div>
                <div class="form-group" id="box-subject">
                </div>
                <div class="form-group">
                    {{ Form::submit(trans('message.create'), ['class' => 'btn btn-primary']) }}
                    <a href="{{ route('show-trainee') }}" class="btn btn-success">@lang('message.back') </a>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection()
