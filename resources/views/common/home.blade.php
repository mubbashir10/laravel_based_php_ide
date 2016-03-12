@extends('layout.main')
@section('content')

<!--slogan-->
<h5 class="margin-top-max">Tired of Server Configuration?</h5>
<p class="grey">use our web based IDE and execute PHP code from within your browser</p>
<!--boxes-->
<div class="row">
    <!--box 1-->
    <div class="columns five card green offset-by-one" onclick="window.location='{{ url("signup") }}'">
        <span class="fa fa-pencil"></span>
        <br>
        <p class="grey">Don't have an account?</p>
        <h5>Sign Up</h5>
    </div>
    <!--box 2-->
    <div class="columns five card red" onclick="window.location='{{ url("login") }}'">
        <span class="fa fa-user"></span>
        <br>
        <p class="grey">Already have an account?</p>
        <h5>Log In</h5>
    </div>
</div>

@endsection