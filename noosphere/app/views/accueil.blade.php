@extends('template_blog')
 
@include('navigation')
 
@section('content')
 
    @if (Session::has('flash_notice'))
        <div class="col-md-12">
            <div class="alert alert-success">
                {{ Session::get('flash_notice') }}
            </div>
        </div>
    @endif
     
    @if (Session::has('flash_error'))
        <div class="col-md-12">
            <div class="alert alert-danger">
                {{ Session::get('flash_error') }}
            </div>
        </div>
    @endif

  <div class="row">

          <div>
            <ul class="event-list">

    @for ($i = 0; $i < count($articles); $i++)
            <li>
                <time datetime="2014-07-20 2000" class="ideePost">
                  <span class="day">28</span>
                  <span class="month">Vote</span>
                  <a class="btn btn-default btn-xs "><span class="glyphicon glyphicon-chevron-up"></span></a><a class="btn btn-default btn-xs "><span class="glyphicon glyphicon-chevron-down"></span></a>
                </time>
                <a href="#aboutModal" data-toggle="modal" data-target="#profilModal">
                  <img alt="avatar" title="Nom Prenom" src="http://i1.wp.com/www.techrepublic.com/bundles/techrepubliccore/images/icons/standard/icon-user-default.png" >
                </a>
                </img>
                <div class="info">
                  <h2 class="title">{{$articles[$i]->title}}</h2>
                  <p class="desc">{{$articles[$i]->intro_text}}</p>
                  <a class="btn btn-default btn-sm pull-right" href="{{ url('art/'.$actif.'/'.$articles[$i]->id) }}">Lire la suite <span class="glyphicon glyphicon-play"></span></a>
                  <ul>
                    <li style="width:33%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
                    <li style="width:34%;">3 <span class="fa fa-comments"></span></li>
                    <li style="width:33%;">32 <span class="fa fa-star"></span></li>
                  </ul>
                </div>
                <div class="social">
                  <ul>
                    <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                    <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                    <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                  </ul>
                </div>
              </li>
    @endfor

        </ul>
    </div>
</div>


     
    @if (method_exists($articles,'links'))
        {{$articles->links()}}
    @endif
     
@stop