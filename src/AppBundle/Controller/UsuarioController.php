<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;
use Symfony\Component\Form\Form;

/**
 * @Route("/usuario")
 * 
 */
class UsuarioController extends Controller
{
    // APIs

    /**
     * @Route("/", name="lista_usuario")
     * @Method("GET")
     * @param Request $request
     * @return JsonResponse
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Usuario:usuario.html.twig');
        //$usuario = $this->getDoctrine()->getRepository(Usuario::class)->findAll();
        //$usuarioD = json_decode($this->get('serializer')->serialize($usuario, 'json'), true);

        //return new JsonResponse($usuarioD);
    }

    /**
     * @Route("/registrar", name="registrar", options={"expose"=true})
     * @param Request $request
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request){

        $usuario = new Usuario();

        $form = $this->createForm(UsuarioType::class, $usuario);

        return $this->render('AppBundle:Usuario:registrar.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/{id}", name="get_usuario", requirements={"id"="\d+"} )
     * @Method("GET")
     * @param Request $request
     * @param Usuario $usuario
     * @return JsonResponse
     */
    public function getUsuario(Request $request, Usuario $usuario)
    {
        $usuarioJ = json_decode($this->get('serializer')->serialize($usuario, 'json'), true);
        return new JsonResponse($usuarioJ);
    }

    /**
     * @Route("/", name="crear_usuario", options={"expose"=true})
     * @param Request $request
     * @Method({"post"})
     *
     * @return JsonResponse
     */
    public function crearUsuario(Request $request)
    {

        $data = json_decode($request->getContent(), true);

        $usuario = new Usuario();

        $form = $this->createForm(UsuarioType::class, $usuario);

        $form->submit($data);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
        } else {
            dump("novalido");
            dump($this->getFormErrors($form));
        }

        die;

        $nuevoUsuario = json_decode($this->get('serializer')->serialize($usuario, 'json'), true);

        return new JsonResponse($nuevoUsuario);

    }

    private function getFormErrors(Form $form)
    {
        $errors = array();
        foreach ($form->getErrors() as $error) {
            $errors[] = $error->getMessage();
        }
        foreach ($form->all() as $childForm) {
            if ($childForm instanceof FormInterface) {
                if ($childErrors = $this->getFormErrors($childForm)) {
                    #$errors[$childForm->getName()] = $childErrors;
                    foreach ($childErrors as $childError) {
                        $errors[] = $childError;
                    }
                }
            }
        }
        return $errors;
    }
}
