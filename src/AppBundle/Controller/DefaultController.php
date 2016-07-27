<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        return [
            'title' => 'Welcome Page'
        ];
    }

    /**
     * @Route("/list", name="list")
     * @Template()
     */
    public function listAction()
    {
        return [
            'title' => 'Product List',
            'products' => [
                [
                    'name' => 'CD Player',
                    'price' => 29.00
                ],
                [
                    'name' => 'DVD Player',
                    'price' => 50.00
                ],
                [
                    'name' => 'Laptop',
                    'price' => 17.00
                ],
                [
                    'name' => 'iPad',
                    'price' => 29.99
                ]
            ]
        ];
    }
}
