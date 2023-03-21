<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonController extends AbstractController
{
    #[Route('/person', name: 'app_person')]
    public function index(): Response
    {

        $person = new Person();
        $form = $this->createForm(PersonType::class, $person);

        return $this->render('person/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
