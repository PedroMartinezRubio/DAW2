<?php

namespace App\Controller;
use App\Entity\Contacto;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContController extends AbstractController
{
    /*#[Route('/cont', name: 'insertar_contacto')]
    public function index(): Response
    {
        return $this->render('cont/index.html.twig', [
            'controller_name' => 'ContController',
        ]);
    }*/
    #[Route('/contacto/insertar', name: 'insertar_contacto')]
    public function insertar(EntityManagerInterface $entityManager): Response
    {
        $contacto = new Contacto();
        $contacto->setNombre("Nombre de Prueba");
        $contacto->setTelefono("65478432");
        $contacto->setEmail("prueba@gmail.nose");

        $entityManager->persist($contacto);
        $entityManager->flush();

        return new Response("Contacto insertado con id " . $contacto->getId());
    }
}
