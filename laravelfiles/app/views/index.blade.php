@extends('layouts.master')

@section('content')

<div class="main-container">
    <div class="main clearfix">
        <div class="imac">
            <ul class="socials horizontal-list categomac">
                <div class='top-bar resp-bar'>
                    <div class='circles'>
                        <div id="close-circle" class="closemen circle"></div>
                        <div id="minimize-circle" class="circle"></div>
                        <div id="maximize-circle" class="circle"></div>
                    </div>
                </div>
                <b>
                    <li data-target-id="1" id="mtn" class="menulistt facebook">
                      <p class="icon"><span><a class="mtnance btn btn-default" href="#mtn" title="En savoir +">
                      <b>MAINTENANCE &nbsp;<i class="glyphicon glyphicon-wrench"></i></b></a></span>
                      </p>
                      <p class="number" data-id="1" >ENTRETIEN <br> REPARATION <br> CONFIGURATION <br> ASSISTANCE</p>
                      <br><a href="#" class="devis" title="Bientôt disponible">DEVIS EN LIGNE</a>
                    </li>
                    <li data-target-id="2" id="vert" class="menulistt mailbox">
                      <p class="icon"><span><a class="mtnance btn btn-default" href="#vert" title="En savoir +"><b>ACHAT &nbsp;<i class="fa fa-cc-visa fa-2x"></i></b></a></span></p>
                      <p class="number" data-id="2" >&nbsp; <br> D'OCCASION <br> ENDOMMAGÉ <br> &nbsp;</p>
                    </li>
                    <li data-target-id="3" id="rouge" class="menulistt googleplus">
                      <p class="icon"><span><a class="mtnance btn btn-default" href="#rouge" title="En savoir +"><b>VENTE &nbsp;<i class="glyphicon glyphicon-euro"></i></b></a></span></p>
                      <p class="number" data-id="3" > &nbsp; <br> D'OCCASION <br> RECONDITIONNÉ <br> &nbsp;</p>
                    </li>
                    <li data-target-id="4" id="turquoise" class="menulistt twitter">
                      <p class="icon"><span><a class="mtnance btn btn-default" href="#turquoise" title="En savoir +"><b>E-COMMERCE &nbsp;<i class="glyphicon glyphicon-shopping-cart"></i></b></a></span></p>
                      <p class="ecom number" data-id="4"> &nbsp; <br> VENTE EN LIGNE <br> </b> <span id="biendisp">BIENTÔT DISPONIBLE</span>&nbsp;</p>
                    </li>
                </b>
            </ul>
            <section class="onglets pannefb">
                <div class='top-bar'>
                    <div class='circles'>
                        <div id="close-circle" class="closemen circle"><span class="closeong">x</span></div>
                        <div id="minimize-circle" class="circle"></div>
                        <div id="maximize-circle" class="circle"></div>
                        <span class="navigation"><span class="servlink" id="pannefb" > SERVICES </span> <i class="menlink fa fa-chevron-right fa-2x"></i>  MAINTENANCE</span>
                    </div>
                </div>
                <div class="cat-mtn panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="headpan panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                          ENTRETIEN
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                      <div class="panel-body">
                        <b>L'Atelier</b> assure tous les travaux nécessaires à l'entretien de votre machine,  Appellez-nous, remplissez le formulaire de <b><a title="Accéder au formulaire" class="toolcon contact" href="#">contact</a></b> / <b><a title="Bientôt disponible" class="tooldev devis" href="#">devis</a></b> ou présentez vous directement à l'Atelier
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="headpan panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          RÉPARATION
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse in">
                      <div class="panel-body">
                        Appellez-nous, remplissez le formulaire de <b><a title="Accéder au formulaire" class="toolcon contact" href="#">contact</a></b> / <b><a title="Bientôt disponible" class="tooldev devis" href="#">devis</a></b> afin de connaître les possibilités et le montant total des travaux à éffectuer, ou présentez vous directement à l'Atelier.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="headpan panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          CONFIGURATION
                        </a>
                      </h4>
                  </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        Appellez-nous ou remplissez le formulaire de <b><a title="Accéder au formulaire" class="toolcon contact" href="#">contact</a></b> / <b><a title="Bientôt disponible" class="tooldev devis" href="#">devis</a></b> afin de nous confier votre produit pour qu'on y effectue les manoeuvres nécessaires.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="headpan panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                          ASSISTANCE
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                      <div class="panel-body">
                       Téléphonez à l'atelier durant les heures d'ouverture au <b>04.69.26.42.33</b>, nous sommes disponibles pour répondre à vos besoins et questions.
                      </div>
                    </div>
                  </div>
                </div>
            </section>
             <section class="onglets vert">
                 <div class='top-bar'>
                     <div class='circles'>
                         <div id="close-circle" class="closemen circle"><span class="closeong">x</span></div>
                         <div id="minimize-circle" class="circle"></div>
                         <div id="maximize-circle" class="circle"></div>
                         <span class="navigation"><span id="2" class="servlink"> SERVICES </span> <i class="menlink fa fa-chevron-right fa-2x"></i>  ACHAT <span class='dim1'>DE MATÉRIEL</span></span>
                     </div>
                 </div>
                <div class="cat-mtn panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="headpan panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseachat"> ON RACHÈTE VOS PRODUITS
                        </a>
                      </h4>
                    </div>
                    <div id="collapseachat" class="panel-collapse collapse in">
                      <div class="panel-body">
                            Nous rachetons vos produits d'occasion, en état de fonctionnement ou non, après une rapide étude, si ils correspondent à notre besoin.
                            <br>Pour éviter de vous déplacer, remplissez le formulaire de rachat afin de nous proposer votre produit <br><b><a class="rachatform" data-toggle="modal" data-target="#myModal"> Cliquez ici pour nous proposer votre produit</a></b><br>
                            Nous vous donnerons une réponse dans les jours qui suivent, avec une fourchette de prix, dans la mesure du possible. <br>
                            Sinon, venez directement nous rendre visite au <b>26 Place des Clercs</b> à <b>Montélimar</b>
                            <br>
                            À bientôt chez <b>l'aTelier mAc</b> !
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade newprod" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Proposez votre produit</h4>
                      </div>
                      <div class="modal-body">
                        <div>
                          {{ Form::open(array('url' => 'contactprod' , 'enctype'=>'multipart/form-data')) }}
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
                            <div class="form-group">
                              <label for="namep">Nom</label>
                              <input type="text" id="namep" class="form-control" required name="name" placeholder="iMac, Macbook..">
                            </div>
                            <div class="form-group">
                              <label for="price">Prix</label>
                              <input type="text" id="price" class="form-control" required name="prix" placeholder="ex: 550">
                            </div>
                            <div class="form-group">
                              <label for="textadesc">Description</label>
                              <textarea class="form-control" required id="textadesc" name="description" cols="30" rows="5" placeholder="etat, configuration.."></textarea>
                            </div>
                            <div class="form-group">
                              <label for="namep">Photos</label>
                               {{ Form::file('files[]', array('class'=>'input-block-level', 'multiple')) }}
                            </div>
                            <div class="form-group text-left subads">
                              <button type="submit" class="subbtn btn btn-primary">Ajouter</button>
                            </div>
                          {{ Form::close() }}
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            </section>
             <section class="onglets rouge">
                 <div class='top-bar'>
                     <div class='circles'>
                         <div id="close-circle" class="closemen circle"><span class="closeong">x</span></div>
                         <div id="minimize-circle" class="circle"></div>
                         <div id="maximize-circle" class="circle"></div>
                         <span class="navigation"><span id="3" class="servlink"> SERVICES </span> <i class="menlink fa fa-chevron-right fa-2x"></i>  VENTE <span class='dim2'>DE MATÉRIEL</span></span>
                     </div>
                 </div>
                <div class="cat-mtn panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="headpan panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsevente">
                          NOS PRODUITS
                        </a>
                      </h4>
                    </div>
                    <div id="collapsevente" class="panel-collapse collapse in">
                      <div class="panel-body">
                            À l'Atelier, nous vendons tous les produits adaptés aux ordinateurs Apple, allant des accéssoires aux pièces principales, selon les disponibilités (produits d'occasion ou reconditionnés).
                            <br>Vous pouvez consulter nos produits en ligne via notre <b><a href="{{ URL::to('products') }}">e-boutique</a></b>. <br>
                            En attendant, venez directement nous rendre visite au <b>26 Place des Clercs</b> à <b>Montélimar</b> , <br>
                            ou contactez nous par téléphone ou via le formulaire de <a class="contact" href="#">contact</a> en précisant l'objet de votre message.
                            <br>
                            À bientôt chez <b>l'aTelier mAc</b> !
                      </div>
                    </div>
                  </div>
                </div>
            </section>
             <section class="onglets turquoise">
                 <div class='top-bar'>
                     <div class='circles'>
                         <div id="close-circle" class="closemen circle"><span class="closeong">x</span></div>
                         <div id="minimize-circle" class="circle"></div>
                         <div id="maximize-circle" class="circle"></div>
                         <span class="navigation"><span id="4" class="servlink"> SERVICES </span> <i class="menlink fa fa-chevron-right fa-2x"></i>  E-COMMERCE</span>
                     </div>
                 </div>
                    <p class="ecom"><b><em>DISPONIBLE TRÈS PROCHAINEMENT</em></b></p>
            </section>
        </div>
        <div id="aside2">
            <div id="presp">
                <section id="pres_boutique">
                    <div id="headasid">
                        <h2>l'aTelier mAc</h2>
                        <img id="boutiqueimg" src="img/15.jpg" alt="profile image" />
                    </div>
                    <p><b> Spécialisé dans l'entretien et la réparation d'ordinateurs de marque Apple,
                        mais aussi pour les autres produits de la marque.</b></p>
                    <p><b>Juste parce-que nous pouvons faire différement, à des prix raisonnables et des délais corrects</b></p>
                    <div class="boutonspop">
                      <a id="horaires" class="btn btn-default" href="#"><b>Horaires </b><i class="fa fa-clock-o"></i></a>
                      <a id="coord" class="btn btn-default" href="#"><b>Coordonnées </b><i class="fa fa-fax"></i></a>
                      <a id="plan" class="btn btn-default" href="#" onclick="open_map();"><b>Plan </b><i class="fa fa-location-arrow"></i></a>
                    </div>
                    <div class="pophoraires">
                        <p class="ho-title"><b><i class="fa fa-clock-o"></i> HORAIRES </b></p>
                        <p class="ho-body">
                            <b>Du Mardi au Samedi </b> <br> 09H00 - 12H30 / 14H00 - 19H00
                        </p>
                    </div>
                    <div class="popcontact">
                        <p class="coo-title"><b> <i class="fa fa-fax"></i> COORDONNEES </b></p>
                        <p class="coo-body">
                            <b><i class="fa fa-phone"></i> Tél </b> &nbsp; 04.69.26.42.33 <br>
                            <b><i class="fa fa-envelope"></i> Mail </b>contact@lateliermac.com
                        </p>
                    </div>
                    <div class="popplan">
                        <p class="plan-title"><b><i class="fa fa-location-arrow"></i> PLAN </b></p>
                        <div class="plan-body">
                            <iframe width="200" height="250" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2842.8406084389508!2d4.751920399999999!3d44.559366600000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b56b19308278b1%3A0xb274dfec6f952ec0!2s26+Place+des+Clercs%2C+26200+Mont%C3%A9limar!5e0!3m2!1sfr!2sfr!4v1408894425951"></iframe>
                        </div>
                    </div>
                </section>
            </div>
            <div id="contactform">
                <div class="row">
                  <div class="col-md-6">
                    <div >
                    {{ Form::open(array('url'=>'contact', 'method' => 'post', 'class' => 'form-horizontal')) }}

                        <legend class="text-center"><i class="envcont fa fa-envelope"></i>&nbsp;Contact<a id="closecontact" href="#" class="closeform glyphicon glyphicon-remove"></a></legend>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="name">Service</label>
                          <div class="col-md-9">
                            <select name="service" id="service">
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
                      {{ Form::close() }}
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="resociaux">
        <span class='social st_sharethis_large' displayText='ShareThis'></span><br>
        <a href="https://www.facebook.com/djeateliermac" target="_blank"><i class="social fa fa-facebook-square fa-3x social-fb"></i></a> <br>
        <a href="https://plus.google.com/u/0/102328922603950184450" target="_blank"><i class="social fa fa-google-plus-square fa-3x social-gp"></i></a> <br>
        <a href="mailto:contact@lateliermac.com"><i class="social fa fa-envelope-square fa-3x social-em"></i></a>
    </div>
</div>

@stop
