<?php

namespace App\Controller;

use App\Entity\Employment;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/employment')]
final class EmploymentController extends AbstractController
{
    #[Route('/', name: 'employment_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $employments = $entityManager->getRepository(Employment::class)->findAll();
        return $this->render('main/index.html.twig', [
            'employments' => $employments,
        ]);
    }

    #[Route('/{id}', name: 'employment_show', methods: ['GET'])]
    public function show(EntityManagerInterface $entityManager, string $id): Response
    {
        $employment = $entityManager->getRepository(Employment::class)->findOneById($id);
        return $this->render('main/show.html.twig', [
            'employment' => $employment,
        ]);
    }
}
