@extends('layout.main')
@section('content')
<h4 class="margin-top-max">Login</h4>
<p class="grey">enter your credentials below to login to your account</p>
<div class="row">
    <div class="columns six offset-by-three">
        <?php echo $msg ?>
        <form class="form" method="post" action="/dashboard">
            <label for="email">Email</label>
            <input class="u-full-width" type="email" id="email" name="username">
            <label for="password">Password</label>
            <input class="u-full-width" type="password" id="password" name="password">
            <input class="button-primary" type="submit" value="Submit" name="submit">
            <br>
            <br>
            <a href="../" style="font-size:12px;">&lt;&lt; Back to Homepage</a>   
        </form>
    </div>  
</div> 
@endsection
