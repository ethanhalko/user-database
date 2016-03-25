@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Your Profile</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form method="POST" action="/user/{{$user->id}}">
                            {{ method_field('PATCH') }}
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                                <div class="row">
                                    <label class="pull-left" for="first-name">Name</label>
                                    <input class="pull-right" type="text" name="name" id="name" value="{{$user->name}}">
                                </div>
                                <div class="row">
                                    <label class="pull-left" for="location">Location</label>
                                    <input class="pull-right" type="text" name="location" id="location" value="{{$user->location}}">
                                </div>
                                <div class="row">
                                    <label class="pull-left" for="email">Email Address:</label>
                                    <input class="pull-right" type="text" name="email" id="email" value="{{$user->email}}">
                                </div>
                                <div class="row">
                                    <label class="pull-left" for="about">About Me</label>
                                </div>
                                <div class="row">
                                    <textarea class="pull-left" name="about" id="about" style="width: 100%;">{{$user->about}}</textarea>
                                </div>
                                <br>
                                <div class="row">
                                    <button type="submit" class="btn btn-primary pull-left">Save</button>
                                </div>
                        </form>
                        <form method="POST" action="/user/{{$user->id}}">
                            <div class="row">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger pull-left confirmation">Delete Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
