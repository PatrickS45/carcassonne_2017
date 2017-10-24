<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PlayerPageController extends Controller
{
    /**
     * @Route("/compte", name="compte")
     */
    public function playerPageAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('player/player.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
