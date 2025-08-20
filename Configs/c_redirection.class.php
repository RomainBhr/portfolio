<?php

//Aiguillage vers le bon corps de page
switch (VariablesGlobales::$cas) {
    default:
    case 'afficherAcc':{
        //controleur
        require_once Chemins::CONTROLEURS.'c_controleur_categories.class.php';
        $controleurArticle = new ControleurCategories();
        $controleurArticle->afficherAcc();
        break;
    }

    case 'afficherMentions':{
        //controleur
        require_once Chemins::CONTROLEURS.'c_controleur_categories.class.php';
        $controleurArticle = new ControleurCategories();
        $controleurArticle->afficherMentions();
        break;
    }

    case 'afficherMiseAJour':{
        //controleur
        require_once Chemins::CONTROLEURS.'c_controleur_categories.class.php';
        $controleurArticle = new ControleurCategories();
        $controleurArticle->afficherMiseAJour();
        break;
    }

    case 'afficherInfoMiseAJour':{
        //controleur
        require_once Chemins::CONTROLEURS.'c_controleur_categories.class.php';
        $controleurArticle = new ControleurCategories();
        $controleurArticle->afficherInfoMiseAJour();
        break;
    }

    case 'afficherListeCommande':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherListeCommande();
        break;
    }
    
    case 'afficherListeClient':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherListeClient();
        break;
    }

    case 'afficherRechercheScan':{
        require_once Chemins::CONTROLEURS.'c_controleur_scan.class.php';
        $controleurArticle = new ControleurScan();
        $controleurArticle->afficherRechercheScan();
        break;
    }

    case 'afficherListeCreationCommande':{
        require_once Chemins::CONTROLEURS.'c_controleur_commande.class.php';
        $controleurArticle = new ControleurCommande();
        $controleurArticle->afficherListeCreationCommande();
        break;
    }

    case 'afficherAjouterPanier':{
        require_once Chemins::CONTROLEURS.'c_controleur_commande.class.php';
        $controleurArticle = new ControleurCommande();
        $controleurArticle->afficherAjouterPanier();
        break;
    }

    case 'afficherAjouterClientPanier':{
        require_once Chemins::CONTROLEURS.'c_controleur_commande.class.php';
        $controleurArticle = new ControleurCommande();
        $controleurArticle->afficherAjouterClientPanier();
        break;
    }

    case 'afficherValiderPanier':{
        require_once Chemins::CONTROLEURS.'c_controleur_commande.class.php';
        $controleurArticle = new ControleurCommande();
        $controleurArticle->afficherValiderPanier();
        break;
    }

    case 'afficherMap':{
        require_once Chemins::CONTROLEURS.'c_controleur_commande.class.php';
        $controleurArticle = new ControleurCommande();
        $controleurArticle->afficherMap();
        break;
    }

    case 'afficherDownloadExcel':{
        require_once Chemins::CONTROLEURS.'c_controleur_scan.class.php';
        $controleurArticle = new ControleurScan();
        $controleurArticle->afficherDownloadExcel();
        break;
    }

    case 'afficherConnexion':{
        require_once Chemins::CONTROLEURS.'c_controleur_user.class.php';
        $controleurArticle = new ControleurUser();
        $controleurArticle->afficherConnexion();
        break;
    }

    case 'afficherScan':{
        require_once Chemins::CONTROLEURS.'c_controleur_scan.class.php';
        $controleurCategories = new ControleurScan();
        $controleurCategories->afficherScan();
        break;
    }

    /*case 'afficherFinirScan':{
        require_once Chemins::CONTROLEURS.'c_controleur_scan.class.php';
        $controleurCategories = new ControleurScan();
        $controleurCategories->afficherFinirScan();
        break;
    }*/

    case 'afficherTemp':{
        require_once Chemins::CONTROLEURS.'c_controleur_scan.class.php';
        $controleurCategories = new ControleurScan();
        $controleurCategories->afficherTemp();
        break;
    }

    case 'afficherBacExistant':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherBacExistant();
        break;
    }

    case 'afficherDateAllo':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherDateAllo();
        break;
    }

    case 'afficherDatePortage':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherDatePortage();
        break;
    }

    case 'afficherDateSonCompte':{
        require_once Chemins::CONTROLEURS.'c_controleur_user.class.php';
        $controleurArticle = new ControleurUser();
        $controleurArticle->afficherDateSonCompte();
        break;
    }

    case 'afficherDateCommande':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherDateCommande();
        break;
    }

    case 'afficherRefFournisseur':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherRefFournisseur();
        break;
    }

    case 'afficherRefFournisseurCouvercle':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherRefFournisseurCouvercle();
        break;
    }

    case 'afficherUplodExcel':{
        require_once Chemins::CONTROLEURS.'c_controleur_scan.class.php';
        $controleurCategories = new ControleurScan();
        $controleurCategories->afficherUplodExcel();
        break;
    }

    case 'afficherMdpOublier':{
        require_once Chemins::CONTROLEURS.'c_controleur_user.class.php';
        $controleurCategories = new ControleurUser();
        $controleurCategories->afficherMdpOublier(VariablesGlobales::$categorie);
        break;
    }

    case 'afficherSupNotif':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherSupNotif();
        break;
    }

    case 'afficherSupCommande':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherSupCommande();
        break;
    }

    case 'afficherTableauAfk':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherTableauAfk();
        break;
    }

    case 'afficherDateElement':{
        require_once Chemins::CONTROLEURS.'c_controleur_scan.class.php';
        $controleurCategories = new ControleurScan();
        $controleurCategories->afficherDateElement();
        break;
    }

    case 'afficherDateContenant':{
        require_once Chemins::CONTROLEURS.'c_controleur_scan.class.php';
        $controleurCategories = new ControleurScan();
        $controleurCategories->afficherDateContenant();
        break;
    }

    case 'afficherDatePrepaCommande':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherDatePrepaCommande();
        break;
    }

    case 'afficherParametreCommande':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherParametreCommande();
        break;
    }

    case 'afficherBackOfficeCuisine':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherBackOfficeCuisine();
        break;
    }

    case 'afficherTournee':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherTournee();
        break;
    }

    case 'afficherModifierOrdreTournee':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherModifierOrdreTournee();
        break;
    }

    case 'afficherSupprimerListingTournee':{
        require_once Chemins::CONTROLEURS.'c_controleur_backoffice.class.php';
        $controleurBack = new ControleurBackOffice();
        $controleurBack->afficherSupprimerListingTournee();
        break;
    }

    case 'afficherMonCompte':{
        require_once Chemins::CONTROLEURS.'c_controleur_user.class.php';
        $controleurArticle = new ControleurUser();
        $controleurArticle->afficherMonCompte();
        break;
    }

    case 'afficherElement':{
        require_once Chemins::CONTROLEURS.'c_controleur_scan.class.php';
        $controleurArticle = new ControleurScan();
        $controleurArticle->afficherElement(VariablesGlobales::$categorie);
        break;
    }

    case 'afficherLeCompte':{
        require_once Chemins::CONTROLEURS.'c_controleur_user.class.php';
        $controleurArticle = new ControleurUser();
        $controleurArticle->afficherLeCompte(VariablesGlobales::$categorie);
        break;
    }

    case 'afficherDeconnexion':{
        require_once Chemins::CONTROLEURS . 'c_controleur_user.class.php';
        $controleurUser = new ControleurUser();
        $controleurUser->afficherDeco();
        break;
    }

    case 'afficherLeClient':{
        require_once Chemins::CONTROLEURS.'c_controleur_user.class.php';
        $controleurArticle = new ControleurUser();
        $controleurArticle->afficherLeClient(VariablesGlobales::$categorie);
        break;
    }

    case 'afficherLeFournisseur':{
        require_once Chemins::CONTROLEURS.'c_controleur_user.class.php';
        $controleurArticle = new ControleurUser();
        $controleurArticle->afficherLeFournisseur(VariablesGlobales::$categorie);
        break;
    }

    case 'afficherMonEtablissement':{
        require_once Chemins::CONTROLEURS.'c_controleur_user.class.php';
        $controleurArticle = new ControleurUser();
        $controleurArticle->afficherMonEtablissement();
        break;
    }

    case 'afficherMenuRedirection':{
        require_once Chemins::CONTROLEURS.'c_controleur_categories.class.php';
        $controleurArticle = new ControleurCategories();
        $controleurArticle->afficherMenuRedirection();
        break;
    }

    case 'afficherRechercheElement':{
        require_once Chemins::CONTROLEURS.'c_controleur_categories.class.php';
        $controleurArticle = new ControleurCategories();
        $controleurArticle->afficherRechercheElement();
        break;
    }

    case 'afficherElemInactif':{
        require_once Chemins::CONTROLEURS.'c_controleur_categories.class.php';
        $controleurArticle = new ControleurCategories();
        $controleurArticle->afficherElemInactif();
        break;
    }

    case 'afficherEtiquette':{
        require_once Chemins::CONTROLEURS.'c_controleur_etiquette.class.php';
        $ControleurEtiquette = new ControleurEtiquette();
        $ControleurEtiquette->afficherEtiquette();
        break;
    }

    case 'afficherModifEtiquette':{
        require_once Chemins::CONTROLEURS.'c_controleur_etiquette.class.php';
        $ControleurEtiquette = new ControleurEtiquette();
        $ControleurEtiquette->afficherModifEtiquette();
        break;
    }

    case 'afficherPermission':{
        require_once Chemins::CONTROLEURS.'c_controleur_permission.class.php';
        $ControleurPermission = new ControleurPermission();
        $ControleurPermission->afficherPermissionByNiveau();
        break;
    }

    case 'afficherModifierPermission':{
        require_once Chemins::CONTROLEURS.'c_controleur_permission.class.php';
        $ControleurPermission = new ControleurPermission();
        $ControleurPermission->afficherModifierPermission();
        break;
    }

    case 'afficherModifierRefFournisseur':{
        require_once Chemins::CONTROLEURS.'c_controleur_user.class.php';
        $controleurUser = new ControleurUser();
        $controleurUser->afficherModifierRefFournisseur();
        break;
    }
    
    case 'afficherTableauActiviterClient':{
        require_once Chemins::CONTROLEURS.'c_controleur_user.class.php';
        $controleurUser = new ControleurUser();
        $controleurUser->afficherTableauActiviterClient();
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