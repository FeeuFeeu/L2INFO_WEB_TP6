<?php

  define('DIR_VIEW', $_SERVER['DOCUMENT_ROOT'] . '/../app/view/');
  define('DIR_CTRL', $_SERVER['DOCUMENT_ROOT'] . '/../app/controller/');

  require_once DIR_CTRL . 'Router.php';

 

  // TODO: utiliser la classe Router pour récupérer les données de la page à
  $router = new Router();
  $data = $router->get($_GET['page']);
  //       afficher ($_GET)

  include DIR_VIEW . 'page.php';
