<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AccueilController
 *
 * @author Patrice
 */
class AccueilController {
    
    /**
     * @route("/", name="acceuil")
     * @return Response
     */
    public function index(): Response{
        return new Response('Hello World !');
    }
}
