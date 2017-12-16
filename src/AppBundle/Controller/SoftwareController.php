<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // Permite definir que tipo de metodo vamos a usar EJM(POST GET DELETE PUT)
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\Software;
use AppBundle\Entity\Departamento;
use AppBundle\Entity\Equipo;

class SoftwareController extends Controller
{

	/**
     * @Route("/listar", name="listar")
     * Method({'GET'})
     */
	public function listar(Request $request){            
		$software = $this->getDoctrine()->getRepository('AppBundle:Software')->findAll();
		return $this->render('listado.html.twig', array('software' => $software));
	}
        public function buscar(Request $request){
            $id=$request->get('buscarSoftware','idSoftware');
		$software = $this->getDoctrine()->getRepository('AppBundle:Software')->find($id);
		return $this->render('listado.html.twig', $software);
	}
        public function insertar(Request $request){
            $software=new Software();
            //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($software);
            $em->flush();            
        }
        public function modificar(Request $request){
            $id=$request->get('modificarSoftware','idSoftware');
            $software=$this->getDoctrine()->getRepository('AppBundle:Software')->find($id);                                   
           //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($software);
            $em->flush();            
        }
        public function elimiinar(Request $request){
            $id=$request->get('eliminarSoftware','idSoftware');
            $software=$this->getDoctrine()->getRepository('AppBundle:Software')->find($id);                             
            $em = $this->getDoctrine()->getManager();
            $em->remove($software);
            $em->flush();            
        }
}
