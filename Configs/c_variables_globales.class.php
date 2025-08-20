<?php

class VariablesGlobales
{
    public static $cas;
    public static $libelleCat;
    public static $libelleCatAssocier;
    public static $categorie;
    public static $cat;
    public static $titre;
    public static $logo;
    public static $stampille;

    public static $idUser;
    public static $idElements;
    public static $contenant;
    public static $lUser;
    public static $idClient;
    public static $idPanier;
    public static $lClient;
    public static $nbBacCouvercle;
    public static $nbTotalElement;
    public static $nbTotalElementJamaisUtiliser;
    public static $listeJamaisUtiliser;
    public static $getHistoriqueUser;
    public static $listeclientsAll;
    public static $getHistoriqueCUser;
    public static $listeSurLaRoute;
    public static $listeCouvercleSurLaRoute;

    public static $url;                 // Donne l'url actuelle
    public static $nomMachine;
    public static $entete;
    public static $retour;
    public static $message;
    public static $resultat;
    public static $metaDescription;
    public static $msgQcm;
    public static $scan;
    public static $nbBacs;
    public static $association;

    public static $Elements;
    public static $debBac;
    public static $debCouvercle;

    public static $cumulativeElementSurPlace;

    public static $NumBacs;
    public static $historiqueBac;
    public static $elementRester;
    public static $historiqueElement;
    public static $numero_jour_dans_semaine_complete;
    public static $fournisseur;
    public static $lesCategories;
    public static $taille;

    public static $CouvercleDispo;
    public static $CouvercleSav;
    public static $listePortageLivrer;
    public static $telecharger;
    public static $telecharger2;
    public static $telechargerTitle;
    public static $telechargerTitle2;
    public static $elementsSupprimer;
    public static $ElementsDispo;
    public static $portageDomicile;
    public static $listePortage;
    public static $nbDivers;
    public static $BacsSav;
    public static $numBox;
    public static $tournee;
    public static $tourneeMenu;
    public static $trouneeLisiting;
    public static $lesDivers;
    public static $lesElem;
    public static $remplissageInfo;
    public static $nbElementsDehors;
    public static $lAnneActuelle;
    public static $GetLesBacsSav;
    public static $getSituationBac;

    public static $GetListeDesClients;
    public static $GetListeDesClientsAvecContenant;
    public static $GetListeDesClientsAfk; // Liste client avec des inactifs (pour le backoffice)
    public static $GetListePrepaCommandeBac;
    public static $GetListePrepaCommandeCouvercle;
    public static $prepaCommande;
    public static $finishUnePrepa;
    public static $listeFournisseur;
    public static $GetListeDesCNettoyage;
    public static $GetLesBacsClients;
    public static $GetLesCouvercleClients;
    public static $GetLesBacsNettoyage;
    public static $GetLesCouvercleNettoyage;
    public static $lesAlertes;
    public static $calibre;
    public static $lesAlertesAfkActif;
    public static $lesAlertesBacAfk;
    public static $lesAlertesCouvercleAfk;
    public static $getLesAlertesActif;
    public static $lesNotifsAutre;
    public static $nbNotif;
    public static $NbElementsAuSav;
    public static $NbElementsSup;
    public static $listeDesNiveaus;
    public static $nbSurLaroute;
    public static $nbDispo;

    public static $clef_secret = "6Lf15m8pAAAAABrPQlHBqvLCfrOh01NcvTZaiDuA";
    public static $clef_public = "6Lf15m8pAAAAAHKAYMue3Gs7PXYgXyUPeBsdjY4Y";

    /*livreur*/
    public static $livreur;
    public static $prixHT;

    /*User*/
    public static $messageInscription;
    public static $messageNiveau;
    public static $libelleClient;
    public static $messageCommande;
    public static $sessionScan;
    public static $prenom;
    public static $associer;
    public static $email1;
    public static $tel;
    public static $email2;
    public static $email;
    public static $erreurCo;
    public static $mdp;
    public static $nom;
    public static $anniv;
    public static $date;
    public static $dateAfficher;
    public static $dateModifier;
    public static $heureActuelle;
    public static $varOk;
    public static $valeurDeObjectif;
    public static $valeurDeObjectifEcho;
    public static $nomciviliteprenom;
    public static $recap; //Renvoie le recap de prépa commande
    public static $lienConfirmation;
    public static $bytes;
    public static $user;
    public static $times;
    public static $etiquette;
    public static $etiquetteOk;
    public static $lienMDP;
    public static $civilite;
    public static $senDer;
    public static $ville;
    public static $societe;
    public static $telephone;
    public static $lemessage;
    public static $sujet;
    public static $variete;

    public static $info;
    public static $info_vert;
    public static $info_red;
    public static $ok_vert;
    public static $messageForm;
    public static $messageFormVar;
    public static $messageForm2;
    public static $messageForm3;
    public static $messageForm4;
    public static $messageForm5;
    public static $errer_red;

    public static $erreurNu;
    public static $erreurM;
    public static $erreurN;
    public static $erreurP;
    public static $erreurPERM;
}

?>