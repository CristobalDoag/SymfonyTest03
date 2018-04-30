<?php
/**
 * Created by PhpStorm.
 * User: Cristobal
 * Date: 30.04.2018
 * Time: 11:26
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyFirstController extends Controller
{

    /**
     * @Route("/myfirstpage")
     */
    public function myFirstPage()
    {
        return $this->render("firstPage.html.twig");
    }
}