<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // Permite definir que tipo de metodo vamos a usar EJM(POST GET DELETE PUT)
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\Usuario;



class UsuarioController extends Controller
{

	/**
     * @Route("/crear", name="crearUsuario")
     * Method({'GET'})
     */
	public function crearUsuario(Request $request)
	{
		//$request->request->get('')
		$usuario = new Usuario();

		$usuario->setNombre('Diego');

		$em = $this->getDoctrine()->getEntityManager();
        
        $em -> persist($usuario);

        $em -> flush();

        return new Response('Registro completo');

	}



}
