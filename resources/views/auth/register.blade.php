@extends('app')

@section('title')
 Sign Up
@endsection


@section('content')
 <div class="row">
	<div class="col s8 offset-s2">
	 <form action="/register" method="post">
		{!! csrf_field() !!}
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
			 <input type="password" name="password" placeholder="password..." required="">
			 <label class="active" for="password">Password</label>
			</div>
		 </div>
		 <div class="row">
			<div class="input-field col s10">
			 <i class="material-icons prefix">account_circle</i>
			 <input type="password" name="password2" placeholder="confirm password..." required="">
			 <label for="password2" class="active">Confirm Password</label>
			</div>
		 </div>
		 <div class="row">
			<div class="input-field col s12 offset-s8">
			 <input type="submit" name="register" value="Sign Up" class="waves waves-light btn">
			</div>
		 </div>
		</div>
	 </form>
	</div>
 </div>
@endsection