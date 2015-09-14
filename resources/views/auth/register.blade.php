@extends('app')

@section('title')
 Sign Up
@endsection


@section('content')
 <div class="row">
	<div class="col s8 offset-s2">
	 <form action="/register" method="post">
		{!! csrf_field() !!}
		<input type="hidden" name="role" value="user">
		<div class="card">
		 <div class="row">
			<div class="col s12 offset-s6">
			 <span class="green-text card-title">Sign Up</span>
			</div>
		 </div>
		 <div class="row">
			<div class="input-field col s10">
			 <i class="material-icons prefix">account_circle</i>
			 <input type="text" name="username" id="username" placeholder="username" required="">
			 <label for="username" class="active">Username</label>
			</div>
		 </div>
		 <div class="row">
			<div class="input-field col s10">
			 <i class="material-icons prefix">email</i>
			 <input type="email" name="email" id="email" placeholder="email..." required="">
			 <label for="email" class="active">Email</label>
			</div>
		 </div>
		 <div class="row">
			<div class="input-field col s10">
			 <i class="material-icons prefix">account_circle</i>
			 <input type="password" name="password" placeholder="password..." required="" id="password">
			 <label class="active" for="password">Password</label>
			</div>
		 </div>
		 <div class="row">
			<div class="input-field col s10">
			 <i class="material-icons prefix">account_circle</i>
			 <input type="password" name="password_confirmation" placeholder="confirm password..." required="" id="password_confirmation">
			 <label for="password2" class="active">Confirm Password</label>
			</div>
		 </div>

		 <div class="row">
			<div class="input-field col s12 offset-s8">
			 <input type="submit" name="register" id="submit" value="Sign Up" class="waves waves-light btn">
			</div>
		 </div>
		 @if($errors->count() > 0)
			<div class="row">
					 @foreach($errors as $error)
						 <p class="red-text">{!! $error !!}</p>
					 @endforeach
			</div>
		 @endif
		</div>
	 </form>
	</div>
 </div>

 <script type="text/javascript">
	$('document').ready(function() {
	 	$('#dialog').$dialog({autoOpen: false});
	});
	$('#password2').onblur(function() {
			var password = $('#password').val();
	 		var confirmPassword = $('#password_confirmation').val();

	 		if(password !== confirmPassword ) {
				$('#dialog').$dialog("open");
			}
	});
 </script>
@endsection