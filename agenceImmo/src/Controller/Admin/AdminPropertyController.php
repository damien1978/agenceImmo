<?php

namespace App\Controller\Admin;

use App\Entity\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminPropertyController extends AbstractController
{

    /**
     * @Route("/admin", name="admin_property_index")
     */
    public function index()
    {

        $repository = $this->getDoctrine()->getRepository(property::class);
        $properties = $repository->findAll();

        
        return $this -> render("admin/property/index.html.twig",[
        "current_menu"=>"admin",
        "properties" => $properties
    
    ]);
    }

}