<?php

  class Router {

    private function produit() {
      return array(
        'view' => DIR_VIEW . 'produit.php',
        'name' => 'Produit'
      );
    }
    
    private function panier() {
      return array(
        'view' => DIR_VIEW . 'panier.php',
        'name' => 'Panier'
      );
    }
    
    private function inscription() {
      return array(
        'view' => DIR_VIEW . 'inscription.php',
        'name' => 'Inscription'
      );
    }
    
    private function erreur() {
      return array(
        'view' => DIR_VIEW . 'erreur.php',
        'name' => 'Erreur'
      );
    }

    // TODO: gérer les autres routes (panier, inscription, erreur)

    public function get($page) {
		if(method_exists($this,$page)) {
			return $this->$page();
		}
		else {
			return $this->erreur();
		}
    }
  }
