<?php

namespace DabrosDkos\PermissionsManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PmRolesController extends AbstractController
{
    #[Route('/pm/roles', name: 'app_pm_roles_read_all', methods: 'GET')]
    public function read_all(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PmGroupController.php',
        ]);
    }

    #[Route('/pm/roles/{$id}', name: 'app_pm_roles_read', methods: 'GET')]
    public function read(int $id): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PmGroupController.php',
        ]);
    }

    #[Route('/pm/roles', name: 'app_pm_roles_create', methods: 'POST')]
    public function create(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PmGroupController.php',
        ]);
    }

    #[Route('/pm/roles/{$id}', name: 'app_pm_roles_update', methods: 'POST')]
    public function update(int $id): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PmGroupController.php',
        ]);
    }

    #[Route('/pm/roles/{$id}', name: 'app_pm_roles_delete', methods: 'DELETE')]
    public function delete(int $id): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PmGroupController.php',
        ]);
    }
}
