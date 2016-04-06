<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> @if (isset($thread))
            {{ $thread->title }} -
        @endif
        @if (isset($category))
            {{ $category->title }} -
        @endif
        {{ trans('forum::general.home_title') }}</title>
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

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Navbar -->
  <nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">

    <!-- Toggle sidebar -->
    
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
        <a data-toggle="dropdown" class="nav-link active dropdown-toggle p-a-0" href="#">&nbsp; {{ trans('front/site.langname') }} <b class="caret"></b> </a>
       
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-list" aria-labelledby="Preview">
         
         <a class="dropdown-item" href="{!! url('language') !!}/id">Indonesia</a>
         <a class="dropdown-item" href="{!! url('language') !!}/en">English</a>
        
        </div>
      </li>





      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="forum.html#" role="button" aria-haspopup="false">
          <img src="assets/images/people/50/guy-6.jpg" alt="Avatar" class="img-circle" width="40">
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





    <main role="main" class="container" style="margin-top: 80px;">
        @if(session()->has('ok'))
            @include('partials/error', ['type' => 'success', 'message' => session('ok')])
        @endif  
        @if(isset($info))
            @include('partials/error', ['type' => 'info', 'message' => $info])
        @endif
       

         @include ('forum::partials.breadcrumbs')
        @include ('forum::partials.alerts')

        @yield('content')
    </main>
    <script>
    var toggle = $('input[type=checkbox][data-toggle-all]');
    var checkboxes = $('table tbody input[type=checkbox]');
    var actions = $('[data-actions]');
    var forms = $('[data-actions-form]');
    var confirmString = "{{ trans('forum::general.generic_confirm') }}";

    function setToggleStates() {
        checkboxes.prop('checked', toggle.is(':checked')).change();
    }

    function setSelectionStates() {
        checkboxes.each(function() {
            var tr = $(this).parents('tr');

            $(this).is(':checked') ? tr.addClass('active') : tr.removeClass('active');

            checkboxes.filter(':checked').length ? $('[data-bulk-actions]').removeClass('hidden') : $('[data-bulk-actions]').addClass('hidden');
        });
    }

    function setActionStates() {
        forms.each(function() {
            var form = $(this);
            var method = form.find('input[name=_method]');
            var selected = form.find('select[name=action] option:selected');
            var depends = form.find('[data-depends]');

            selected.each(function() {
                if ($(this).attr('data-method')) {
                    method.val($(this).data('method'));
                } else {
                    method.val('patch');
                }
            });

            depends.each(function() {
                (selected.val() == $(this).data('depends')) ? $(this).removeClass('hidden') : $(this).addClass('hidden');
            });
        });
    }

    setToggleStates();
    setSelectionStates();
    setActionStates();

    toggle.click(setToggleStates);
    checkboxes.change(setSelectionStates);
    actions.change(setActionStates);

    forms.submit(function() {
        var action = $(this).find('[data-actions]').find(':selected');

        if (action.is('[data-confirm]')) {
            return confirm(confirmString);
        }

        return true;
    });

    $('form[data-confirm]').submit(function() {
        return confirm(confirmString);
    });
    </script>

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