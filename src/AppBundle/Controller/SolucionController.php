<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // Permite definir que tipo de metodo vamos a usar EJM(POST GET DELETE PUT)
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\Solucion;
use AppBundle\Entity\Departamento;
use AppBundle\Entity\Equipo;

class SolucionController extends Controller
{

	public function listar(Request $request){            
		$solucion = $this->getDoctrine()->getRepository('AppBundle:Solucion')->findAll();
		return $this->render('listado.html.twig', array('solucion' => $solucion));
	}
        public function buscar(Request $request){
            $id=$request->get('buscarSolucion','idSolucion');
		$solucion = $this->getDoctrine()->getRepository('AppBundle:Solucion')->find($id);
		return $this->render('listado.html.twig', $solucion);
	}
        public function insertar(Request $request){
            $solucion=new Solucion();
            //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($solucion);
            $em->flush();            
        }
        public function modificar(Request $request){
            $id=$request->get('modificarSolucion','idSolucion');
            $solucion=$this->getDoctrine()->getRepository('AppBundle:Solucion')->find($id);                                   
           //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($solucion);
            $em->flush();            
        }
        public function elimiinar(Request $request){
            $id=$request->get('eliminarSolucion','idSolucion');
            $solucion=$this->getDoctrine()->getRepository('AppBundle:Solucion')->find($id);                             
            $em = $this->getDoctrine()->getManager();
            $em->remove($solucion);
            $em->flush();            
        }
}
