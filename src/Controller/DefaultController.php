<?php
/**
 * Created by PhpStorm.
 * User: Cristobal
 * Date: 30.04.2018
 * Time: 11:40
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render("base.html.twig");

    }

    /**
     * @Route("/secondpage", name="secondPage")
     */
    public function secondPage()
    {
        return $this->render("firstPage.html.twig");

    }

}