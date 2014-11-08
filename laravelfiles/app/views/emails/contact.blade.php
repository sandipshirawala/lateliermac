<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
    <body>
    <div class="row">
            <div class="well">
            <h2>NOUVEAU MESSAGE DE LA PART D'UN VISITEUR</h2>
            <hr>
            <div>
                <p>Service : {{ $service }}</p>
                <p>Nom : {{ $author }}</p>
                <p>E-mail : {{ $email }}</p>
                <p>Message : {{ $contenu }}</p>
            </div>
            <hr>
            <div>
                <p>Pour répondre à ce message, clique sur ce lien :</p>
                <a href="mailto:{{ $email }}">Répondre</a>
            </div>
        </div>
    </div>
    </body>
</html>