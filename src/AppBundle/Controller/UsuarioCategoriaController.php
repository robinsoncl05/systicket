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
    /**
     * @Route("usuariocategoria", name="usuariolistalc")
     */
    public function indexAction(Request $request)
    {
        // just setup a fresh $task object (remove the dummy data)
    $usuario = new Usuario();

    $form = $this->createFormBuilder($usuario)
        ->add('nombres', TextType::class)
        ->add('apellidos', TextType::class)
        ->add('usuario', TextType::class)
        //->add('dueDate', DateType::class)
        ->add('Guardar', SubmitType::class, array('label' => 'Crear Usuario'))
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $task = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
        // $em = $this->getDoctrine()->getManager();
        // $em->persist($task);
        // $em->flush();

        return $this->redirectToRoute('task_success');
    }

    return $this->render('default/new.html.twig', array(
        'form' => $form->createView(),
    ));

        /* replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));*/
    }
}
