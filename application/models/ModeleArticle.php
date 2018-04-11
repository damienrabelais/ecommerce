<?php

class ModeleArticle extends CI_Model {

 
public function __construct()

{

$this->load->database();

/* chargement database.php (dans config), obligatoirement dans le constructeur */

}

 

     public function retournerArticles($pNoArticle = FALSE)

     {

        if ($pNoArticle === FALSE) // pas de n° d'article en paramètre

        {  // on retourne tous les articles

             $requete = $this->db->get('tabarticle');

             return $requete->result_array(); // retour d'un tableau associatif

        }

        
        // ici on va chercher l'article dont l'id est $pNoArticle

        $requete = $this->db->get_where('tabarticle', array('cNo' => $pNoArticle));

        return $requete->row_array(); // retour d'un tableau associatif

     } // fin retournerArticles

 

} // Fin Classe