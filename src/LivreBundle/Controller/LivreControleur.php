<?php
namespace LivreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Tests\Controller;
use Symfony\Component\Routing\Route;



/**
 * Description of LivreControleur
 * @author sebastien
 */

class LivreControleur extends Controller {
    
    /**
     * @Route("/livre/tome/{num}/chp/{pages}")
     * @Template("LivreBundle::index.html.twig")
     */
    
    public function getLivre($num,$pages){
        
        return Response($num,$pages);
        
    }
}
