<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;

class StatController extends Controller
{
    /**
     * @Route("/stat/", name="stat")
     */
    public function statAction(Request $request)
    {   $user = $this->getUser()->getStatistic();
        dump($user);
        $repository = $this->getDoctrine()->getRepository('AppBundle:Statistic');
        $statistics = $repository->findAll();

        dump ($statistics);

        return $this->render('stat/stat.html.twig',
            ['statistics' => $statistics] );

    }
}
