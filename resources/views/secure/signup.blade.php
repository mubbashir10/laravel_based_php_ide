@extends('layout.main')
@section('content')
<h4 class="margin-top-max">Sign Up</h4>
<p class="grey">fill and form below and let's get started!</p>
<div class="row">
    <div class="columns six offset-by-three">
        <form class="form" action="/success" method="POST">
            {{ csrf_field() }}
            <label for="fullname">Full Name</label>
            <input class="u-full-width" type="text" id="fullname" name="fullname" required>
            <label for="email">Email</label>
            <input class="u-full-width" type="email" id="email" name="username" required>
            <label for="password">Password</label>
            <input class="u-full-width" type="password" id="password" name="password" required>
            <br>
            <input type="radio" name="role" value="0">&nbsp;User&nbsp;&nbsp;&nbsp;<input type="radio" name="role" value="1">&nbsp;Moderator
            <br>
            <br>
            <input class="button-primary" type="submit" value="Submit" name="submit">
            <br>
            <br>
            <a href="../" style="font-size:12px;">&lt;&lt; Back to Homepage</a>   
        </form>
    </div>  
</div>  
@endsection