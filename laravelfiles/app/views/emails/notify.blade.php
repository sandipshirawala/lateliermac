<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
    <body>
    <div class="row">
            <div class="well">
            <h2>Notification - L'atelier Mac</h2>
            <hr>
            <div>
                <p>
                  Bonjour,
                  <br><br>
                  Vous avez demandé à être prévenu losqu'un produit du type <b>{{ $category }}</b> serait de nouveau disponible.<br>
                  Aujourd'hui, je vous annonce qu'un produit semblable est en ligne. Pour y accéder : <br><br>
                  <a class="btn btn-default" href="http://www.lateliermac.com/products/{{ $product }}">Voir le produit</a>
                  <br><br>
                  À bientôt chez <b>L'Atelier Mac</b> .
                </p>
            </div>
            <hr>
            <div class="text-center">
                <p class="text-muted">
                  Cet e-mail vous a été envoyé par <a href="http://www.lateliermac.com/products/{{ $product }}">http://www.lateliermac.com</a>
                </p>
            </div>
        </div>
    </div>
    </body>
</html>
