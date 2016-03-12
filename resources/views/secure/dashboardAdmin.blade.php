@extends('layout.main')
@section('content')
<div class="margin-top-mid">

    <!--user code-->
    <table>
    	<tr>
    		<th>Username</th>
    		<th>Code</th>
    	</tr>
    	@foreach ($list as $item)
		    <tr>
		    	<td>{{ $item->username }}</td>
		    	<td>{{ $item->data }}</td>
		    </tr>
		@endforeach
    </table>

    <form action='/signout' method="post">
    	<button>Sign Out</button>
    </form>	
</div>
@endsection
