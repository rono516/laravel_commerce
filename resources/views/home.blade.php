@extends('frontendlayouts.main')

@section('content')

<div class="p-4 m-4 bg-red-500 text-center">
    <p>Welcome to your profile {{ Auth::user()->name  }} </p>
    <p>Email {{ Auth::user()->email }} </p>

</div>


@endsection
