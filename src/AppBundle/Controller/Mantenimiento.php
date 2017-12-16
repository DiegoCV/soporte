<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // Permite definir que tipo de metodo vamos a usar EJM(POST GET DELETE PUT)
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\Mantenimiento;
use AppBundle\Entity\Departamento;
use AppBundle\Entity\Equipo;

class MantenimientoController extends Controller
{

	/**
     * @Route("/listar", name="listar")
     * Method({'GET'})
     */
	public function listar(Request $request){            
		$mantenimiento = $this->getDoctrine()->getRepository('AppBundle:Mantenimiento')->findAll();
		return $this->render('listado.html.twig', array('mantenimiento' => $mantenimiento));
	}
        public function buscar(Request $request){
            $id=$request->get('buscarMantenimiento','idMantenimiento');
		$mantenimiento = $this->getDoctrine()->getRepository('AppBundle:Mantenimiento')->find($id);
		return $this->render('listado.html.twig', $mantenimiento);
	}
        public function insertar(Request $request){
            $mantenimiento=new Mantenimiento();
            //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($mantenimiento);
            $em->flush();            
        }
        public function modificar(Request $request){
            $id=$request->get('modificarMantenimiento','idMantenimiento');
            $mantenimiento=$this->getDoctrine()->getRepository('AppBundle:Mantenimiento')->find($id);                                   
           //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($mantenimiento);
            $em->flush();            
        }
        public function elimiinar(Request $request){
            $id=$request->get('eliminarMantenimiento','idMantenimiento');
            $mantenimiento=$this->getDoctrine()->getRepository('AppBundle:Mantenimiento')->find($id);                             
            $em = $this->getDoctrine()->getManager();
            $em->remove($mantenimiento);
            $em->flush();            
        }
}
