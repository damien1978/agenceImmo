<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{

    public function index()
    {
        return new Response("<html> <h1> Bonjour </h1> </html>");
    }

}