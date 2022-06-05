@extends('base')

@section('pagebody')

<div class="centralise">

   


    <form action="{{ route('usersettings') }}" method="post">
        @csrf

        <H1>User Settings</H1>


    @if ($message = Session::get('alert'))
    <div class="alert alert-{{ Session::get('alert-type') }} alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
    </div>
    @endif
    
        @include('usersettings.form')

        <div class="text-right p-4">
            <button class="btn button btn-primary">Save</button>
        </div>
    </form>

</div>


@endsection