<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>axlyody at Phily +</title>
		<meta name="description" content="">	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		@yield('head')

		{!! HTML::style('assets/css/style.min.css') !!}

		<!--[if (lt IE 9) & (!IEMobile)]>
			{!! HTML::script('js/vendor/respond.min.js') !!}
		<![endif]-->
		<!--[if lt IE 9]>
			{!! HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') !!}
			{!! HTML::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') !!}
		<![endif]-->

		{!! HTML::style('https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en') !!}
		{!! HTML::style('assets/css/materialize.css') !!}

	</head>

  <body class="layout-container ls-top-navbar si-l3-md-up">

	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Navbar -->
  <nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">

    <!-- Toggle sidebar -->
    
    <!-- Brand -->
    <a href="index.html" class="navbar-brand"><i class="material-icons"></i> Phily +
    </a>

    <!-- Search -->
   
    <!-- // END Search -->

    <ul class="nav navbar-nav hidden-sm-down">

      <!-- Menu -->
      <li class="nav-item {!! classActiveOnlyPath('/') !!}">
			{!! link_to('/', trans('front/site.home'), array('class' => 'nav-link')) !!}
	  </li>
	  <li class="nav-item {!! classActiveOnlySegment(1, ['articles', 'blog']) !!}">
			{!! link_to('/blog', "Latest Works", array('class' => 'nav-link')) !!}
	  </li>
      <li class="nav-item {!! classActiveOnlySegment(1, ['articles', 'blog']) !!}">
			{!! link_to('/blog', trans('front/site.blog'), array('class' => 'nav-link')) !!}
	  </li>
	  <li class="nav-item {!! classActiveOnlyPath('gallery') !!}">
			{!! link_to('/gallery', trans('front/site.gallery'), array('class' => 'nav-link')) !!}
	  </li>
	  <li class="nav-item {!! classActiveOnlyPath('forum') !!}">
			{!! link_to('/forum', trans('front/site.forum'), array('class' => 'nav-link')) !!}
	  </li>
    </ul>

    <!-- Menu -->
    <ul class="nav navbar-nav pull-xs-right">

     

      <!-- User dropdown -->
      <li class="nav-item dropdown">
      	<a data-toggle="dropdown" class="nav-link active dropdown-toggle p-a-0" href="#">&nbsp; {{ trans('front/site.langname') }} <b class="caret"></b> </a>
       
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-list" aria-labelledby="Preview">
        <a class="dropdown-item" href="{!! url('language') !!}/id">Bahasa Indonesia</a>
        <a class="dropdown-item" href="{!! url('language') !!}/en">English</a>
        </div>
      </li>





      <li class="nav-item dropdown">
      @if(session('statut') == 'user' || session('statut') == 'admin' )
        <a class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="forum.html#" role="button" aria-haspopup="false">
          <img src="/sakuya.jpg" alt="Avatar" class="img-circle" width="40">
          {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->username }}}
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-list" aria-labelledby="Preview">
          <a class="dropdown-item" href="{{url('admin')}}"><i class="material-icons md-18">lock</i> <span class="icon-text">{{ trans('front/site.admin') }}</span></a>
          <a class="dropdown-item" href="profile.html"><i class="material-icons md-18">person</i> <span class="icon-text">{{ trans('front/site.profile') }}</span></a>
          <a class="dropdown-item" href="profile.html"><i class="material-icons md-18">person</i> <span class="icon-text">{{ trans('front/site.settings') }}</span></a>
          <a class="dropdown-item" href="{{url('auth/logout')}}">{{ trans('front/site.logout') }}</a>
        </div>
      @else
      	<a class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="forum.html#" role="button" aria-haspopup="false">
          <img src="/space/profile/UnknownProfile.png" alt="Avatar" class="img-circle" width="40"> Me
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-list" aria-labelledby="Preview">
           <a class="dropdown-item" href="{!! url('auth/login') !!}"><i class="material-icons md-18">lock</i> <span class="icon-text">{{ trans('front/site.login') }}</span></a>
          <a class="dropdown-item" href="{!! url('auth/register') !!}"><i class="material-icons md-18">person</i> <span class="icon-text">{{ trans('front/site.signup') }}</span></a>
          
        </div>
      @endif  
      </li>
      <!-- // END User dropdown -->

    </ul>
    <!-- // END Menu -->

  </nav>
  <!-- // END Navbar -->





	
		@if(session()->has('ok'))
			@include('partials/error', ['type' => 'success', 'message' => session('ok')])
		@endif	
		@if(isset($info))
			@include('partials/error', ['type' => 'info', 'message' => $info])
		@endif
		@yield('main')

	<footer role="contentinfo">
		 @yield('footer')
		
		
	</footer>
		
	{!! HTML::script('assets/vendor/jquery.min.js') !!}
	{!! HTML::script('assets/vendor/tether.min.js') !!}
	{!! HTML::script('assets/vendor/bootstrap.min.js') !!}
	{!! HTML::script('assets/vendor/adminplus.js') !!}
	{!! HTML::script('assets/js/main.min.js') !!}
	
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->


	@yield('scripts')

  </body>
</html>