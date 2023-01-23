<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ajax")
 */
class AjaxController extends AbstractController
{
    /**
     * @Route("/contact", name="app_ajax_contact", methods={"POST"})
     */
    public function contact(): JsonResponse
    {

        return new JsonResponse([
            "success" => true,
            "message" => "Die Brieftaube wurde losgeschickt."
        ]);
    }
}
