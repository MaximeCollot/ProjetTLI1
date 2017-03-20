<?php
//Chargement du flux RSS

require("lib/class/ElementRSS.class.php");
 class FluxRSS {
     
    public function getFluxrss() {
        
        
        
            $cache_time = 3600*24; // 24 hours
            $cache_file = $_SERVER['DOCUMENT_ROOT'].'/cache/test.rss';
            $timedif = @(time() - filemtime($cache_file));
            if (file_exists($cache_file) && $timedif < $cache_time) {
                $string = file_get_contents($cache_file);
            } else {
                $string = file_get_contents('http://www.santepubliquefrance.fr/content/view/rss/426');
                if ($f = @fopen($cache_file, 'w')) {
                    fwrite ($f, $string, strlen($string));
                    fclose($f);
                }
            }
            //$xml = simplexml_load_string($string);


        
        
                if($flux = simplexml_load_string($string))
                {
                   $_elements =array();
                   $donnee = $flux->channel;

                   foreach($donnee->item as $valeur)
                   {
                       $element= new ElementRSS($valeur->pubDate, $valeur->title, $valeur->description, $valeur->link );
                       $_elements[] = $element;
                   }
                }else echo 'Erreur de lecture du flux RSS';
        
        return $_elements;
    }
 }  