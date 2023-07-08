<?php if ( ! defined('BASEPATH')) exit('No direct script access 
allowed');
if ( ! function_exists('formater')) {
    /*
    *
    *   @param number 
    *   return String
    */

    function formater($entree) {
        $string='';
        $nombre = str_split($entree);
        $compteur=0;
        for($i=count($nombre)-1;$i>=0;$i--)
        {
            $string=$nombre[$i].$string;
            $compteur++;
            if($compteur==3)
            {
                $string=' '.$string;
                $compteur=0;
            }
        }
        $string=$string.' Ar';
        return $string;
    }

}
?>