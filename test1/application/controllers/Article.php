<?php

class Article extends CI_Controller
{
     public function __construct()
    {
        //  Obligatoire
        parent::__construct();
        
        //$this->load->helper('url');
        //$this->load->helper('nom');
        //  Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
        $this->titre_defaut = 'Partie gestion des articele class article';
        echo 'Bonjour ! article  ';
   }
    

  

    public function  afficher () {


        echo " on va lister les articles  ";
        echo " load view affichage ";

    }
    public function ajouter () {


        echo " on va ajouter une  articles  ";
        echo " load view d ajouter nouveau article ";

    }
    public function modifier () {


        echo " on peux modifier une articles  ";
        echo " load view de modifeir articel deja existant ";

    }

    public function  supprimer () {
        echo " ici on peux supprimer une article ";
        echo " load view affichage de nouveau liste apres supprission  ";
    }







}

?>