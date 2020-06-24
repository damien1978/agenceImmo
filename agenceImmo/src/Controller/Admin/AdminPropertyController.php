<?php

namespace App\Controller\Admin;

use App\Entity\Property;
use App\Form\PropertyType;
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
    /**
     * @Route("/admin/create", name="admin_property_create")
     */
    public function create()
    {
      $form = $this->createForm(PropertyType::class);

        return $this->render("admin/property/create.html.twig", [
            "form" => $form->createView()
        ]);
    }

}