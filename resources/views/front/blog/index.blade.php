@extends('front.template')

@section('main')
<style>
.navbar {
      background-color: #2c3e50!important;
}
</style>
<div class="nopadding" >   
<main role="main" class="container" style="padding-top:80px">
    <div class="row">
        <div class="col-md-8">

        @foreach($posts as $post)


         

          <div class="card">
           @if(!empty($post->cover))
          <div style="overflow: hidden;
    height: 250px;
    background: url({{ $post->cover }});
    background-size: cover;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;">
          </div>
          @endif
            <div class="card-header bg-white">
              <h4 class="card-title">{!! link_to('blog/' . $post->slug, $post->title) !!}</h4>
              <span style="    float: right;
    position: relative;
    top: -25px;">
    <span style="    font-size: 14px;
    margin-right: 10px;
    position: relative;
    top: 1px;">{!! link_to('u/' . $post->user->username, $post->user->username) !!}</span>
               <img src="assets/images/people/110/guy-6.jpg" alt="About Adrian" width="50" class="img-circle">
              </span> 
            </div>
           
            <div class="card-block">
            {!! $post->summary !!}
            </div>
            <div class="card-header bg-white">
              <div class="media">
                <div class="media-body media-middle">
                  <p class="card-subtitle"></p>
                </div>
              </div>
            </div>
            <div class="card-block">


             <div class="media">
                
                <div class="media-body media-middle">
                  <p class="card-subtitle"></p>
                 
                </div>
              </div>

              <div>
               <a href="#comment" class="card-link"><i class="material-icons text-muted-light">comment</i> {{ $post->comments->count() }} {{ trans('front/blog.comments') }}</a>               <a href="#comment" class="card-link"><i class="material-icons text-muted-light">access_time</i> {{ $post->created_at }}</a>
               
              </div>
             
            </div>
          </div>
          @endforeach
          <!-- Lessons -->
          

        </div>
        <div class="col-md-4">
         
          <div class="card">
           <div class="card-header">
              <h4 class="card-title"> {{ trans('front/site.search') }}</h4>
            </div>
            
            <div class="card-block">
     {!! Form::open(['url' => 'blog/search', 'method' => 'get']) !!}
      <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="{{ trans('front/site.typetosearch') }}">
        <span class="input-group-btn"><button class="btn" type="submit"><i class="material-icons">search</i></button></span>
      </div>
    {!! Form::close() !!}
            </div>
          </div>
          <div class="card">
            <ul class="list-group list-group-fit">
              <li class="list-group-item">
                <div class="media">
                  <div class="media-left">
                    <i class="material-icons text-muted-light">link</i>
                  </div>
                  <div class="media-body media-middle">
                    Test list
                  </div>
                </div>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
{!! $links !!}

</main>
</div>
@stop

