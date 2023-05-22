<?php
session_start();

/*
function age($dateNaiss) : int { 
    
        $am = explode('/', $dateNaiss);
        $an = explode('/', date('d/m/Y'));
        if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
        return $an[2] - $am[2] - 1;
        }
*/
    function age($dateNaiss) { 
         $age = date('Y') - $dateNaiss; 
        if (date('md') < date('md', strtotime($dateNaiss))) { 
            return $age - 1; 
        } 
        return $age; 
    } 

    function verifImpotParis(int $age , $sexe): bool {
        if ( $age >20 and $sexe == 'Homme' ) {
            $var = true;
            }else   {
        if (($age>17 and $age<36) and $sexe == 'Femme') {
            $var = true;
                    }else {
                        $var = false;
                    }
            }
            return $var; 

    }



?>


    
