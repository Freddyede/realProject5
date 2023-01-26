<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): JsonResponse {
        $request = new Response();
        $datas = [
            'users' => [
                ['id'=>1,'lastName'=>'Patouillard', 'firstName'=>'Franck'],
                ['id'=>2,'lastName'=>'Patouillard', 'firstName'=>'Hugo']
            ]
        ];
        return $this->json([
            'status code' => $request->getStatusCode(),
            'datas' => $datas
        ]);
    }
}
