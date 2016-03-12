@extends('layout.main')
@section('content')
<div class="margin-top-mid">

    <!--user code-->
    <h5></h5>
    <form method="post" action="/execute">
        <textarea class="code" name="data"></textarea>
        <button><i class="fa fa-play"></i>&nbsp;run</button>
    </form>

    <!--execution results-->
    <div class="console"><?php echo eval($code) ?></div>
    <br>
    <form action='/signout' method="post">
        <button class="button-primary">Sign Out</button>
    </form>


</div>
@endsection
