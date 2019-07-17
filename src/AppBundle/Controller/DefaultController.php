<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        return $this->render('@App/default/index.html.twig');
    }

    /**
     * @Route("/feeadback", name="feeadback")
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="home")
     */
    public function feedbackAction()
    {
        return $this->render('@App/default/feedback.html.twig');
    }
}
