
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Noosphere</h1>
        <h2>Renouvellement de mot de passe</h2>
 
        <div>
            Pour renouveller votre mot de passe veuillez utiliser ce lien : 
            <p>
                {{ url('remind/reset/'.$token) }}
            </p>
        </div>
    </body>
</html>