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
        $property= new Property();

        $property->setName("mon premier bien")
                ->setDescription ("super appart à vendre")
                ->setFloor(4)
                ->setRoom(2)
                ->setSurface(80)
                ->setPrice(95000);
                
    }

}