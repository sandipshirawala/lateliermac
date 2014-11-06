<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>L'Atelier Mac Montélimar</title>
        <meta name="description" content="Entretien et réparation d'ordinateurs mac (apple), vente et achat de matériel d'occasion pour mac à Montélimar 26200 Drôme.">
        <meta name="keywords" content="mac,apple,atelier,montelimar,reparation,ordinateur,achat,vente,26,drome,iphone,ipad,imac,macbook,repare,piece,detachees,macbookpro,air,iMac,iPad,occasion,26,drôme,montélimar,place,des,clercs,place des clercs,boutique apple,magasin apple,réparation apple,vente apple,achat apple,assistance apple,assistance mac,mac ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{HTML::style('css/bootstrap.css') }}
        {{HTML::style('css/admin.css') }}
    </head>
    <body>
    <style>.wraphide{margin-left: 0% !important;}</style>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <nav id="spy">
                <ul class="sidebar-nav nav">
                        <li data-scroll><b>
                            <a href="{{ URL::to('admin') }}">
                                <i class="fa fa-home solo"></i><span class="navbtn">&nbsp;&nbsp;&nbsp;HOME</span>
                            </a>
                        </b></li>
                        <li><b>
                            <a href="{{ URL::to('admin/products') }}" data-scroll>
                                <i class="fa fa-apple solo "></i><span class="navbtn">&nbsp;&nbsp;&nbsp;PRODUITS</span>
                            </a>
                        </b></li>
                        <li><b>
                            <a href="#anch2" data-scroll>
                                <i class="fa fa-user solo "></i><span class="navbtn">&nbsp;&nbsp;&nbsp;FOLLOWERS</span>
                            </a>
                        </b></li>
                        <li><b>
                            <a href="{{ URL::to('logout') }}" data-scroll>
                                <i class="fa fa-power-off solo"></i><span class="navbtn">&nbsp;&nbsp;&nbsp;DECONNEXION</span>
                            </a>
                        </b></li>
                        <li><b>
                            <a href="{{ URL::to('/') }}" data-scroll>
                                <i class="fa fa-undo solo "></i><span class="navbtn">&nbsp;&nbsp;&nbsp;L'ATELIER MAC</span>
                            </a>
                        </b></li>
                  </ul>
            </nav>
        </div>
    </div>
 @if(Session::has('message'))
    <p class="text-center alert alert-success">{{ Session::get('message') }}</p>
 @elseif(Session::has('error'))
    <p class="text-center alert alert-danger">{{ Session::get('error') }}</p>
@endif
<div id="page-content-wrapper">
    <div class="page-content inset" data-spy="scroll" data-target="#spy">
        <div class="row">
            <h2 id="home">
                <a id="menu-toggle" href="#" class="fa fa-bars btn-menu toggle btn btn-default"></a>
            </h2>
@yield('content')
    </div>
 </div>
</div>
        {{HTML::script('js/jquery.js')}}
        {{HTML::script('js/bootstrap.js') }}
        {{HTML::script('js/script.js') }}
        {{HTML::script('js/admin.js') }}
    </body>
</html>
