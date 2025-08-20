<?php

//Aiguillage vers le bon corps de page
switch (VariablesGlobales::$cas) {
    default:
    case 'afficherAcc':{
        require_once Chemins::CONTROLEURS.'c_controleur_include.class.php';
        $controleurArticle = new ControleurInclude();
        $controleurArticle->afficherAccueil();
        break;
    }

    case 'Erreur404':{
        require Chemins::VUES . 'erreur/v_erreur_404.inc.php';
        break;
    }

    /*default : {
        require Chemins::VUES . 'v_erreur_404.inc.php';
        break;
    }*/

}

?>