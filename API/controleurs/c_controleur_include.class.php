<?php

class ControleurInclude
{
    // En tete du site, gestion du css et su SEO, loading
    public function afficherEnTete(){
        require Chemins::VUES_INCLUDES . 'v_en_tete.inc.php';
    }

    // Accueil et page principale du site
    public function afficherAccueil(){
        require Chemins::VUES_PAGE . 'v_accueil.inc.php';
    }

    // Pied du site, gestion du js et du pied du site
    public function afficherPied(){
        require Chemins::VUES_INCLUDES . 'v_footer.inc.php';
    }
}
