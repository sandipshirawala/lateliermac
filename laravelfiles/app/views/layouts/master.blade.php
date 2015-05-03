<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>L'Atelier Mac Montélimar</title>
        <meta name="description" content="Entretien et réparation d'ordinateurs mac (apple), vente et achat de matériel d'occasion pour mac à Montélimar 26200 Drôme.">
        <meta name="keywords" content="mac,apple,atelier,montelimar,reparation,ordinateur,achat,vente,26,drome,iphone,ipad,imac,macbook,repare,piece,detachees,macbookpro,air,iMac,iPad,occasion,26,drôme,montélimar,place,des,clercs,place des clercs,boutique apple,magasin apple,réparation apple,vente apple,achat apple,assistance apple,assistance mac,mac ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.lateliermac.com/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
        <link rel="icon" href="img/atelierpng.ico" />
        {{HTML::style('css/bootstrap.css') }}
        {{HTML::style('css/main.css') }}
        <!-- LIBS -->
        {{HTML::script('js/jquery.js')}}
        {{HTML::script('js/bootstrap.js') }}
        <script src="http://www.lateliermac.com/fancybox/source/jquery.fancybox.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        {{HTML::script('js/angular.min.js') }}
        {{HTML::script('js/services/sortable.js') }}
        <!-- SCRIPTS -->
        {{HTML::script('js/script.js') }}
        {{HTML::script('js/controllers/mainCtrl.js') }}
        {{HTML::script('js/services/productService.js') }}
        {{HTML::script('js/app.js') }}

    </head>
    <body ng-app="productApp" ng-controller="mainController">
        @if(Session::has('message'))
            <p class="text-center alert alert-success">{{ Session::get('message') }}</p>
        @elseif(Session::has('error'))
            <p class="text-center alert alert-danger">{{ Session::get('error') }}</p>
        @endif

        <div class="header-container">
            <header class="wrapper clearfix">
                    <h1 class="title">l'aTelier mAc <span id="logomac">@&amp;@</span></h1> <br>
                    <span class="adress">
                        26 Place des Clercs,<br>
                        26200 MONTÉLIMAR
                    </span>
                    <nav class="menu">
                        <ul>
                            <li data-target-id=""><a href="{{ URL::to('/') }}">Accueil &nbsp; <i class="fa fa-home fa-2x"></i></a></li>
                            <li data-target-id=""><a class="contact">Contact &nbsp; <i class="fa fa-envelope fa-2x"></i></a></li>
                            <li data-target-id=""><a href="{{ URL::to('products') }}">ACHAT / VENTE &nbsp;<i class="fa fa-shopping-cart fa-2x"></i></a></li>
                        </ul>
                    </nav>
            </header>
        </div>
        @yield('content')
        <div class="modal fade" id="myModalCont" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Nous Contacter</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row modcont">
                          <div class="col-md-6">
                            <div >
                            {{ Form::open(array('url'=>'contact', 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'formcont')) }}
                              <fieldset>
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="name">Service</label>
                                  <div class="col-md-9">
                                    <select name="service" id="service" class="form-control">
                                        <option value="commercial">Service commercial</option>
                                        <option value="technique">Service technique</option>
                                        <option value="distance">Assistance à distance</option>
                                    </select>
                                  </div>
                                </div>
                                <!-- Name input-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="name">Nom</label>
                                  <div class="col-md-9">
                                    <input id="name" name="author" type="text" placeholder="Votre nom" class="form-control" required>
                                  </div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="email">Mail</label>
                                  <div class="col-md-9">
                                    <input id="email" name="email" type="email"  placeholder="Votre adresse email" class="form-control" required>
                                  </div>
                                </div>
                                <!-- Message body -->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="message">Message</label>
                                  <div class="col-md-9">
                                    <textarea class="form-control" required id="message" name="message" placeholder="Votre message ici" rows="5"></textarea>
                                  </div>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                  <div class="envoyer col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                                  </div>
                                </div>
                              </fieldset>
                              {{ Form::close() }}
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <footer>
                <p class="footcont">
                    <small>SAS/U Djecha / RCS Romans - 803980515 - l'aTelier mAc &copy; - 26 Place des Clercs 26200 MONTÉLIMAR </small><br>
                    <small id="copydev"><a target="_blank" href="http://www.chalasdev.altervista.org" class="chalasdev">Création par Robin CHALAS - Développeur Web &copy;</a></small>
                </p>
            </footer>
        </div>
        <!-- ShareThis-->
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "8f49948b-f772-44d4-9f3c-dae8a57700bb", doNotHash: false, onhover: false, doNotCopy: false, hashAddressBar: false});</script>
    </body>
</html>
