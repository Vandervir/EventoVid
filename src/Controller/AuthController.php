<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends AbstractFOSRestController
{
    /**
     * @return Response
     */
    public function getListAction(): Response
    {
        $data = [
            'test'
        ];
        return $this->handleView($this->view($data));
    }
}
