<?php

namespace App\Controller;


use App\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    /**
     * @Route("/city/{id}", name="city")
     */
    public function action($id)
    {
        $City = $this->getDoctrine()->getRepository(City::class)->find($id);
        $response = new Response($City);
        return $response;
    }


}
