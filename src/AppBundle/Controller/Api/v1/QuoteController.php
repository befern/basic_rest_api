<?php

namespace AppBundle\Controller\Api\v1;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class QuoteController extends Controller
{

    /**
     * @Route("/api/v1/quote")
     * @Method("POST")
     */
    public function newAction(Request $request) {

        $sourceQuery = $request->query->get('source');
        $quote = $request->query->get('quote');

    }

}
