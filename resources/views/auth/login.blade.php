@extends('front.template')
<style>
body {
	    background-color: #2c3e50!important;
}
</style>

  


@section('main')
<div class="nopadding" >   
<main role="main" class="container" style="padding-top:80px">
  <div class="col-md-12" style="color:#fff">
    <div class="row">
        <div class="col-sm-6">
            @if(session()->has('error'))
					@include('partials/error', ['type' => 'danger', 'message' => session('error')])
				@endif	
				
				<h2 class="intro-text text-center">{{ trans('front/login.connection') }}</h2>
		
				<p>{{ trans('front/login.text') }}</p>				
				
				{!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}	
				
				<div class="row">

					{!! Form::control('text', 6, 'log', $errors, trans('front/login.log')) !!}
					{!! Form::control('password', 6, 'password', $errors, trans('front/login.password')) !!}
					<div class="form-group col-lg-12">
				<input class="btn btn-white btn-rounded" type="submit" value="{{trans('front/form.send')}}">
			</div>
					<div class="checkbox col-lg-12">
				<label class="c-input c-checkbox">
					<input name="memory" type="checkbox" value="1">
					<span class="c-indicator"></span>
					<span class="txtck">{{trans('front/login.remind')}}</span>
				</label>
			</div>
					
				</div>
				
				{!! Form::close() !!}

				
        </div>
        <div class="col-sm-6">
           	
				<h2 class="intro-text text-center">{{ trans('front/register.title') }}</h2>
				
				<p>{{ trans('front/register.infos') }}</p>		

				{!! Form::open(['url' => 'auth/register', 'method' => 'post', 'role' => 'form']) !!}	

					<div class="row">
						{!! Form::control('text', 6, 'username', $errors, trans('front/register.pseudo'), null, [trans('front/register.warning'), trans('front/register.warning-name')]) !!}
						{!! Form::control('email', 6, 'email', $errors, trans('front/register.email')) !!}
					</div>
					<div class="row">	
						{!! Form::control('password', 6, 'password', $errors, trans('front/register.password'), null, [trans('front/register.warning'), trans('front/register.warning-password')]) !!}
						{!! Form::control('password', 6, 'password_confirmation', $errors, trans('front/register.confirm-password')) !!}
					</div>
					

					<div class="row">	
						<div class="form-group col-lg-12">
				<input class="btn btn-white btn-rounded" type="submit" value="{{trans('front/form.send')}}">
			</div>
					</div>
					
				{!! Form::close() !!}
        </div>
    </div>




  </div>

	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				

			</div>
		</div>
	</div>
</main>
</div>
@stop
@section('scripts')

	<script>
		$(function() { $('.badge').popover();	});
	</script>

@stop

