<?php

namespace App\Controller;

use App\Entity\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @route("/buy", name="property_index")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Property::class);

       $property =  $repository->findAllVisible();        

        return $this->render("property/index.html.twig",[
            "current_menu" =>"buy",
            "property"=>$property
        ]);
    }

}


// $property= new Property();

//         $property->setName("mon premier bien")
//                 ->setDescription ("super appart à vendre")
//                 ->setFloor(4)
//                 ->setRoom(2)
//                 ->setSurface(80)
//                 ->setPrice(95000);
                
//         $em=$this->getDoctrine()->getManager();
//         $em->persist($property);
//         $em->flush();