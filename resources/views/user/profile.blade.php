@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $user->name }}'s Profile
                        @if(Auth::user()->id == $user->id)
                            <a href="{{route('user.edit', ['user' => $user->id])}}" class="pull-right">Edit</a>
                        @endif
                    </div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6"><h3><u>Name:</u></h3></div>
                                <div class="col-md-offset-6"><h3>{{ $user->name }}</h3></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><h3><u>Location:</u></h3></div>
                                <div class="col-md-offset-6"><h3>{{ $user->location }}</h3></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><h3><u>Email:</u></h3></div>
                                <div class="col-md-offset-6"><h3>{{ $user->email }}</h3></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><h3><u>About Me</u></h3></div>
                            </div>
                            <div class="row">
                                <p>

                                <div class="col-md-6">{!! nl2br(e($user->about)) !!}</div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
