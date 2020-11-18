 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="assets/css/style.css">
 <title>Réponse formulaire</title>
 </head>
 <body>
 <h1 class="h1_form">Votre demande au nom de <?php echo $_POST["firstname"];
                                                   echo " ";
                                                   echo $_POST["surname"];?>
  a été prise en compte</h1>
 <a href="index.html" class="link_return">retour</a>
 </body>
 </html>
