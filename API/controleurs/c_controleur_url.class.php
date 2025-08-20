<?php

class ControleurUrl
{
    public function url()
    {

        date_default_timezone_set('Europe/Paris');
       // sleep(10);

        /*if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        {
            VariablesGlobales::$url = "https";
        }
        else
        {*/
            VariablesGlobales::$url = "http";
            //self::retourAvecUrl("");
        //}

        VariablesGlobales::$url .= "://";
        VariablesGlobales::$url .= $_SERVER['HTTP_HOST'];
        VariablesGlobales::$url .= $_SERVER['REQUEST_URI'];

        VariablesGlobales::$cas =(!isset($_REQUEST['cas'])) ? 'afficherAccueil' : $_REQUEST['cas'];
        VariablesGlobales::$categorie =(!isset($_REQUEST['categorie'])) ? '' : $_REQUEST['categorie'];

        VariablesGlobales::$categorie = str_replace("-"," ",VariablesGlobales::$categorie);
        VariablesGlobales::$titre = substr(VariablesGlobales::$categorie,2);

        VariablesGlobales::$titre = VariablesConfig::$titre;
        VariablesGlobales::$metaDescription = VariablesConfig::$titre . ", ";

        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }

    public static function retour404()
    {
        echo '<script> window.location.href = "'.VariablesConfig::$url .'error/404/"</script>';
    }

    public static function retourAvecUrl($url)
    {
        //var_dump($_SESSION["id"]);
        echo '<script> window.location.href = "'.VariablesConfig::$url . $url .'"</script>';
    }

    public static function retourUrlPrecise($url)
    {
        //var_dump($_SESSION["id"]);
        echo '<script> window.location.href = "' . $url .'"</script>';
    }

    public static function console($url)
    {
        //var_dump($_SESSION["id"]);
        echo '<script> console.log("' . $url .'")</script>';
    }

    public static function verfiAjax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';
    }
}

?>