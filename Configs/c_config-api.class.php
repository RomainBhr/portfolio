<?php

class VariablesConfig
{
    //.htaccess : les url (https://www.tracabac.com/)
    // de meme dans robot.txt ou manifest.json ou sitemap.xml

     /***************************
     *
     * Développer par : Boehler Romain
     * Dernière mise à jour : 20/05/2025
     * Version : 1.03
     *
     ***************************/

    //Style
    public static $clair = "#0087cb";
    public static $foncer = "#0e2a47";

    //Usage sur tout le site
    public static $titre = "Traçabac";
    public static $email = "info@tracabac.com";
    public static $url = "https://www.tracabac.com/";
    public static $version = "V1.02";
    public static $cookie = "www.tracabac.com";
    public static $cookieName = "tracabac";

    //Client
    public static $libelleClient = "Satellites";
    public static $libelleClientSing = "Satellite";
    public static $libelleClientSingMin = "satellite";
    public static $libelleClientAdjMaj = "Le satellite";
    public static $libelleClientAdj = "le satellite";
    public static $libelleTournerSingMin = "une tournée";
    public static $libelleTourner = "Tournées";
    public static $libelleTournerMin = "tournée";

    //Lieu
    public static $nomLieu = "Cuisine";
    public static $nomLieuListe = "Cuisine centrale";
    public static $nomLieuMin = "cuisine";
    public static $nomLieuLa = "La cuisine";
    public static $nomLieuLaMin = "la cuisine";

    //Allotissement
    public static $alloLibel = "Allotissement des commandes";
    public static $alloLibelMin = "allotissement des commandes";
    public static $alloLibelMinDeter = "un allotissement";
    public static $alloLibelMinL = "l'allotissement";
    public static $alloLibelLest = "L'allotissement est";
    public static $prepaCommandeString = "préparation des commandes";
    public static $Portage = "Portage";
    public static $PortageMin = "portage";

    //Élément
    public static $libelleElement = "Éléments";
    public static $libelleElementMin = "éléments";
    public static $libelleElementMinsansS = "élément";
    public static $libelleElementC = "Cet élément";
    public static $libelleElementLe = "L'élément";
    public static $libelleElementLeMin = "l'élément";
    public static $libelleElementD = "de l'élément";
    public static $libelleElementDpLU = "des éléments";
    public static $imageElement = "bac.svg";
    public static $imageElementWebp = "b.webp";

    //Page connexion
    public static $conec_1 = "CUISINE CENTRALE";
    public static $conec_2 = "PRÉPARATEUR";
    public static $conec_3 = "CONSOMMATEUR";
    public static $desc_conso = "Numéro SIRET de la centrale <br> écrit sur l'étiquette";
    public static $ce_FR = "FR";
    public static $ce_conso = "true";
    public static $autreOption = "true";
    public static $optionNavigation = false;

    //Options
    public static $temperature = "true";

    // Menu :
    public static $statInterne = "true";
    public static $statExterne = "true";
    public static $gestionElement = "true";
    public static $gestionDroit = "true";
    public static $gestionAlerte = "true";
    public static $gestionForunisseur = "true";
    public static $allotissement = "true";
    public static $prepaCommande = null;
    public static $receptionLieu = "true";
    public static $etiquette = null;
    public static $collecte = "true";
    public static $livraison = "true";
    public static $horsligne = "true";
    public static $associationElem = "true";
    public static $optionVariete = null;
    public static $scan2D = "true";
    public static $Conditionnement = "Conditionnement";
    public static $lavage = "true";
    public static $sav = "true";
    public static $recepClient = "true";
    public static $scanGestionClient = "true";
    public static $statInterneClient = "true";
    public static $erreurImportante = "";
}

?>