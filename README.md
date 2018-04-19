# L2INFO_WEB_TP6


Sous windows : easyphp -> a droite de la barre des taches icone apparait -> clic droit -> administration
Lier le dossier html -> ajouter un alias
acces a la base de donnees -> modules 

Modifier le fichier index.php : 

<?php

  define('DIR_VIEW','/../app/view/');
  define('DIR_CTRL','/../app/controller/');

  require_once DIR_CTRL . 'Router.php';

 

  // TODO: utiliser la classe Router pour récupérer les données de la page à
  $router = new Router();
  $data = $router->get($_GET['page']);
  //       afficher ($_GET)

  include DIR_VIEW . 'page.php';
