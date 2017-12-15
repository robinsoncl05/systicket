<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Usuario;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class NotaController extends Controller
{
     public function indexAction(Request $request)
    {
   return $this->render('AppBundle:Nota:nota.html.twig');
   }
}
