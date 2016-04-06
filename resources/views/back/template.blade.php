<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ trans('front/site.title') }}</title>
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
        {!! HTML::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
        {!! HTML::style('https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/1.4.0/css/flag-icon.min.css') !!}

    </head>

  <body class="layout-container ls-top-navbar si-l3-md-up">

	<!--[if lte IE 7]>
	    <p class="browsehappy">Vous utilisez un navigateur <strong>obsolète</strong>. S'il vous plaît <a href="http://browsehappy.com/">Mettez le à jour</a> pour améliorer votre navigation.</p>
	<![endif]-->


    <nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">

   <button class="navbar-toggler pull-xs-left active" type="button" data-toggle="sidebar" data-target="#sidebarLeft"></button>
    <!-- Brand -->
    <a href="index.html" class="navbar-brand"><i class="material-icons"></i> Phily
    </a>

    <!-- Search -->
   
    <!-- // END Search -->

    <ul class="nav navbar-nav hidden-sm-down">

      <!-- Menu -->
      <li class="nav-item {!! classActiveOnlyPath('/') !!}">
      {!! link_to('/', trans('front/site.home'), array('class' => 'nav-link')) !!}
    </li>
      <li class="nav-item {!! classActiveOnlySegment(1, ['articles', 'blog']) !!}">
      {!! link_to('/blog', trans('front/site.blog'), array('class' => 'nav-link')) !!}
    </li>
    <li class="nav-item {!! classActiveOnlyPath('gallery') !!}">
      {!! link_to('/gallery', 'Gallery', array('class' => 'nav-link')) !!}
    </li>
    <li class="nav-item {!! classActiveOnlyPath('forum') !!}">
      {!! link_to('/forum', 'Forum', array('class' => 'nav-link')) !!}
    </li>
    </ul>

    <!-- Menu -->
    <ul class="nav navbar-nav pull-xs-right">

     

      <!-- User dropdown -->
      <li class="nav-item dropdown">
        <a data-toggle="dropdown" class="nav-link active dropdown-toggle p-a-0" href="#"><i class="flag-icon flag-icon-{{ session('locale') }}"></i>&nbsp; <b class="caret"></b> </a>
       
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-list" aria-labelledby="Preview">
         @foreach ( config('app.languages') as $user)
                                @if($user !== config('app.locale'))
                                    <a class="dropdown-item" href="{!! url('language') !!}/{{ $user }}"><i class="flag-icon flag-icon-{{ $user }}"></i></a>
                                @endif
                            @endforeach
        </div>
      </li>





      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="forum.html#" role="button" aria-haspopup="false">
          <img src="/assets/images/people/50/guy-6.jpg" alt="Avatar" class="img-circle" width="40">
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-list" aria-labelledby="Preview">
          <a class="dropdown-item" href="account-edit.html"><i class="material-icons md-18">lock</i> <span class="icon-text">Edit Account</span></a>
          <a class="dropdown-item" href="profile.html"><i class="material-icons md-18">person</i> <span class="icon-text">Public Profile</span></a>
          <a class="dropdown-item" href="login.html">Logout</a>
        </div>
      </li>
      <!-- // END User dropdown -->

    </ul>
    <!-- // END Menu -->

  </nav>
  <!-- // END Navbar -->
   <!-- Toggle sidebar -->
    <div class="sidebar sidebar-left sidebar-light si-si-3 ls-top-navbar-xs-up sidebar-transparent-md sidebar-transition sidebar-visible" id="sidebarLeft" data-scrollable="">
    
    <div class="sidebar-heading"><i class="material-icons md-18">comment</i> BLOG</div>
    <ul class="sidebar-menu">
      <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="{!! url('admin/blog?name=posts.created_at&sens=asc') !!}">{{ trans('back/admin.see-all') }}</a>
      </li>
      <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="{!! url('admin/blog/create') !!}">{{ trans('back/admin.add') }}</a>
      </li>
      <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="{!! url('admin/blog/comment') !!}">{{ trans('back/admin.comments') }}</a>
      </li>
    </ul>

    <div class="sidebar-heading"><i class="material-icons md-18">image</i> Gallery</div>
    <ul class="sidebar-menu">
      <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="{!! route('medias') !!}">{{ trans('back/admin.medias') }}</a>
      </li>
    </ul>

    <div class="sidebar-heading"><i class="material-icons md-18">extension</i> Settings</div>
    <ul class="sidebar-menu">
      <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="{!! route('medias') !!}">General</a>
      </li>
    </ul>
    
    
  </div>

       <div class="layout-content" data-scrollable="">

            <div class="container-fluid">

                @yield('main')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /.page-wrapper -->

    </div>
    <!-- /.wrapper -->

    	{!! HTML::script('assets/vendor/jquery.min.js') !!}
        {!! HTML::script('assets/vendor/tether.min.js') !!}
        {!! HTML::script('assets/vendor/bootstrap.min.js') !!}
        {!! HTML::script('assets/vendor/adminplus.js') !!}
        {!! HTML::script('assets/js/main.min.js') !!}

        @yield('scripts')

  </body>
</html>