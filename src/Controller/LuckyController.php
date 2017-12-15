<?php

/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
/**
 * Description of LuckyController
 *
 * @author tobias
 */
class LuckyController {
    //put your code here
    public function number(){
        
        $number = mt_rand(1, 10);
        
        return new Response(
                '<html><body>Lucky number: '.$number.'</body></html>'
                );
    }
}
