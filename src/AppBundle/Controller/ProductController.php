<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    /**
     * @return array
     * @Template()
     * @Route("/products", name="product_list")
     */
    public function indexAction()
    {
        $arr = [];
        for ($i=0; $i<10; $i++)
            array_push($arr ,rand(0, 100));
        return ['products'=>$arr];
    }

    /**
     * @param integer $id
     * @return array
     * @Template()
     * @Route("/product/show/{id}", name="show")
     */
    public function showAction($id):array
    {
        return ['id'=>$id];
    }
}
