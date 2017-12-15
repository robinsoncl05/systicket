<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Usuario;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class UsuarioCategoriaController extends Controller
{
    public function indexAction(Request $request)
    {
     $usuario = new Usuario();

    $form = $this->createFormBuilder($usuario)
        ->add('nombres', TextType::class)
        ->add('apellidos', TextType::class)
        ->add('usuario', TextType::class)
        ->add('Guardar', SubmitType::class, array('label' => 'Crear Usuario'))
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
       $task = $form->getData();

        return $this->redirectToRoute('task_success');
    }

    return $this->render('default/new.html.twig', array(
        'form' => $form->createView(),
    ));

     }
}
