<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // Permite definir que tipo de metodo vamos a usar EJM(POST GET DELETE PUT)
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\Problema;
use AppBundle\Entity\Departamento;
use AppBundle\Entity\Equipo;

class ProblemaController extends Controller
{

	/**
     * @Route("/listar", name="listar")
     * Method({'GET'})
     */
	public function listar(Request $request){            
		$problema = $this->getDoctrine()->getRepository('AppBundle:Problema')->findAll();
		return $this->render('listado.html.twig', array('problema' => $problema));
	}
        public function buscar(Request $request){
            $id=$request->get('buscarProblema','idProblema');
		$problema = $this->getDoctrine()->getRepository('AppBundle:Problema')->find($id);
		return $this->render('listado.html.twig', $problema);
	}
        public function insertar(Request $request){
            $problema=new Problema();
            //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($problema);
            $em->flush();            
        }
        public function modificar(Request $request){
            $id=$request->get('modificarProblema','idProblema');
            $problema=$this->getDoctrine()->getRepository('AppBundle:Problema')->find($id);                                   
           //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($problema);
            $em->flush();            
        }
        public function elimiinar(Request $request){
            $id=$request->get('eliminarProblema','idProblema');
            $problema=$this->getDoctrine()->getRepository('AppBundle:Problema')->find($id);                             
            $em = $this->getDoctrine()->getManager();
            $em->remove($problema);
            $em->flush();            
        }
}
