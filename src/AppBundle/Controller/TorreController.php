<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // Permite definir que tipo de metodo vamos a usar EJM(POST GET DELETE PUT)
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\Torre;
use AppBundle\Entity\Departamento;
use AppBundle\Entity\Equipo;

class TorreController extends Controller
{

	/**
     * @Route("/listar", name="listar")
     * Method({'GET'})
     */
	public function listar(Request $request){            
		$torre = $this->getDoctrine()->getRepository('AppBundle:Torre')->findAll();
		return $this->render('listado.html.twig', array('torre' => $torre));
	}
        public function buscar(Request $request){
            $id=$request->get('buscarTorre','idTorre');
		$torre = $this->getDoctrine()->getRepository('AppBundle:Torre')->find($id);
		return $this->render('listado.html.twig', $torre);
	}
        public function insertar(Request $request){
            $torre=new Torre();
            //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($torre);
            $em->flush();            
        }
        public function modificar(Request $request){
            $id=$request->get('modificarTorre','idTorre');
            $torre=$this->getDoctrine()->getRepository('AppBundle:Torre')->find($id);                                   
           //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($torre);
            $em->flush();            
        }
        public function elimiinar(Request $request){
            $id=$request->get('eliminarTorre','idTorre');
            $torre=$this->getDoctrine()->getRepository('AppBundle:Torre')->find($id);                             
            $em = $this->getDoctrine()->getManager();
            $em->remove($torre);
            $em->flush();            
        }
}
