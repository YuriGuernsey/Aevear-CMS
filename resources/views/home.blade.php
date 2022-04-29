@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
<form action = "{{ route('logout') }}" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<table>
	<tr>
	<td>First Name</td>
	<td><input type='text' name='first_name' /></td>
	<tr>
	<td>Last Name</td>
	<td><input type="text" name='last_name'/></td>
	</tr>
	<tr>
	<td>City Name</td>
	<td>
	<select name="city_name">
	<option value="bbsr">Bhubaneswar</option>
	<option value="cuttack">Cuttack</option>
	</select></td>
	</tr>
	<tr>
	<td>Email</td>
	<td><input type="text" name='email'/></td>
	</tr>

	<tr>
	<td colspan = '2'>
	<input type = 'submit' value = "Add student"/>
	</td>
	</tr>
	</table>
</form>
</div>
@endsection
