<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>
            Noosphère
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css') }}
        {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css') }}
        {{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}
        {{ HTML::style('assets/css/design.css') }}
    </head>
 
    <body>
    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Noosphere</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    @yield('navigation')
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-plus-circle"></span></span></a>       
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Ajouter une source d'informations</a></li>
                        <li><a href="#">Créer une idée</a></li>
                      </ul>
                      <li >
                        <form class="navbar-form navbar-left" role="search">
                            {{ Form::open(array('url' => 'find', 'method' => 'POST', 'class' => 'form-control navbar-search navbar-left')) }}
                            {{ Form::text('find', '', array('class' => 'search-query', 'placeholder' => 'Recherche')) }}
                            {{ Form::close() }}
                        </form>
                    </li>               
                    </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Compte
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="navbar-content">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="http://placehold.it/120x120"
                                                    alt="Alternate Text" class="img-responsive" />
                                                <p class="text-center small">
                                                    <a href="#">Change Photo</a></p>
                                            </div>
                                            <div class="col-md-7">
                                                @if (Auth::check())
                                                <span>{{ Auth::user()->username;}}</span>
                                                <p class="text-muted small">
                                                    {{ Auth::user()->email;}}</p>
                                                @else
                                                <span>Pseudo</span>
                                                
                                                <p class="text-muted small">
                                                    mail@gmail.com</p>
                                                @endif
                                                <div class="divider">
                                                </div>
                                                <a href="#" class="btn btn-primary btn-sm active">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navbar-footer">
                                        <div class="navbar-footer-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="#" class="btn btn-default btn-sm">Modifier le password</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="http://www.jquery2dotnet.com" class="btn btn-default btn-sm pull-right">Déconnexion</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container" >
            <section>
                @yield('content')
            </section>
 
            <footer class="row">
                <div class="span12">
                    <em>
                        Copyright 2013
                    </em>
                </div>
            </footer>
        </div>
        {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'); }}
        {{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js'); }}
    </body>
</html>




