@extends('app')
@section('title') Home @stop

@section('content')
	<div class="row">
	 <div class="col s6">
		some content here
	 </div>
	 <form method="post" action="/auth/login" id="login-form">
		{!! csrf_field() !!}
		<div class="col s6">
		 <div class="row">
			<div class="card">
			 <div class="row">
				<div class="col s12 offset-s8">
				 <span class="card-title green-text">Sign In</span>
				</div>
			 </div>
			 <div class="row">
				<div class="input-field col s10">
				 <i class="material-icons prefix">email</i>
				 <input type="email" name="email" placeholder="email" required="">
				 <label for="email" class="active">Email</label>
				</div>
			 </div>
			 <div class="row">
				<div class="input-field col s10">
				 <i class="material-icons prefix">account_circle</i>
				 <input type="password" placeholder="password" name="password" required="">
				 <label for="password" class="active">Password</label>
				</div>
				<div class="row">
					<div class="input-field col s12 offset-s1">
					 <input type="checkbox" id="remember_me" name="remember_me">
					 <label for="remember_me">Remember Me</label>
					</div>
				</div>
				<div class="row">
				 <div class="input-field col s12 offset-s6">
					<input type="submit" class="waves-effect waves-light btn" value="Sign In">
				 </div>
				</div>
			 </div>
			</div>
		 </div>
		</div>
	</form>
</div>
@stop
