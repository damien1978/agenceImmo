<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminPropertyController extends AbstractController
{

    /**
     * @Route("/admin", name="admin_property_index")
     */
    public function index()
    {
        return $this -> render("admin/property/index.html.twig",[
        "current_menu"=>"admin"
    
    ]);
    }

}