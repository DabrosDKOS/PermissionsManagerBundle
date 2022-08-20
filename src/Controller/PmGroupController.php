<?php

namespace DabrosDkos\PermissionsManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PmGroupController extends AbstractController
{
    #[Route('/pm/group', name: 'app_pm_group_read_all', methods: 'GET')]
    public function read_all(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PmGroupController.php',
        ]);
    }

    #[Route('/pm/group/{$id}', name: 'app_pm_group_read', methods: 'GET')]
    public function read(int $id): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PmGroupController.php',
        ]);
    }

    #[Route('/pm/group', name: 'app_pm_group_create', methods: 'POST')]
    public function create(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PmGroupController.php',
        ]);
    }

    #[Route('/pm/group/{$id}', name: 'app_pm_group_update', methods: 'POST')]
    public function update(int $id): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PmGroupController.php',
        ]);
    }

    #[Route('/pm/group/{$id}', name: 'app_pm_group_delete', methods: 'DELETE')]
    public function delete(int $id): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PmGroupController.php',
        ]);
    }
}
